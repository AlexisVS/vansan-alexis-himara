<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_room;
use App\Models\Page_room_sidebar;
use App\Models\Room as ModelsRoom;
use App\Models\Room_categories;
use App\Models\Room_image;
use App\Models\Room_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Mail\EditorRequest;
use App\Models\EditorRoomRequest;
use App\Models\Mailbox;

class Room extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static_room' => Page_room::all(),
            'static_room_sidebar' => Page_room_sidebar::all(),
            'rooms' => ModelsRoom::all(),
            'services' => Room_service::all(),
        ];

        return view('pages.room.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'icons' => fontawesomeiconlist::all(),
            'categories' => Room_categories::all(),
            'services' => Room_service::all(),
        ];

        return view('pages.room.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Room_categories::all();

        $request->validate([
            "dropcap_before" => "required",
            "dropcap_u" => "required",
            "dropcap_after" => "required",
            "text1" => "required",
            "text2_before" => "required",
            "text2_u" => "required",
            "text2_after" => "required",
            "text3_before" => "required",
            "text3_u" => "required",
            "text3_after" => "required",
            "rating_i_class" => "required",
            "rating_text" => "",
            "price" => "required",
            "name" => "required",
            "slogan" => "required",
            "number_bed" => "required",
            "number_persons" => "required",
            "sq_mt" => "required",
            "room_category_id" => "required",
            "favorite_roomList" => "",
            "images" => "required",
        ]);

        $store = new ModelsRoom();
        $store->dropcap_before = $request->dropcap_before;
        $store->dropcap_u = $request->dropcap_u;
        $store->dropcap_after = $request->dropcap_after;
        $store->text1 = $request->text1;
        $store->text2_before = $request->text2_before;
        $store->text2_u = $request->text2_u;
        $store->text2_after = $request->text2_after;
        $store->text3_before = $request->text3_before;
        $store->text3_u = $request->text3_u;
        $store->text3_after = $request->text3_after;
        $store->rating_i_class = $request->rating_i_class;
        $store->rating_text = $request->rating_text;
        $store->price = $request->price;
        $store->name = $request->name;
        $store->slogan = $request->slogan;
        $store->number_bed = $request->number_bed;
        $store->number_persons = $request->number_persons;
        $store->sq_mt = $request->sq_mt;
        $store->room_category_id = $request->room_category_id;
        $request->favorite_roomList == 1 ? $store->favorite_roomList = $request->favorite_roomList :  $store->favorite_roomList = 0;
        if (Auth::user()->roles->first()->id == 3) {
            $store->available = 0;
        } else {
            $store->available = 1;
        }
        $store->save();
        $store->refresh();
        $filePath = '/images/rooms/' . strtolower($categories->where('id', $request->room_category_id)->first()->value);

        // dd($request->file('images'), $filePath);
        foreach ($request->file('images') as $file) {
            Storage::disk('public')->put($filePath, $file);
            $store->images()->create([
                'image_img' => $file->hashName(),
            ]);
            $store->refresh();

            Image::make(public_path($filePath) . '/' . $file->hashName())
                ->fit(370, 230)
                ->save();
        }

        foreach ($request->services as $service) {
            $store->services()->attach($service, ['available' => 1]);
        }

        if (Auth::user()->roles->first()->id == 3) {

            $editorRequest = new EditorRoomRequest([
                'editor_name' => auth()->user()->name,
                'editor_id' => auth()->user()->id,
                'room_id' => $store->id,
                'action_crud' => 'store',
            ]);
            $editorRequest->save();

            $mail = new Mailbox([
                'title' => 'An editor has Created a new room and require your approvement.',
                'read' => 0,
                'archived' => 0,
            ]);

            $editorRequest->mails()->save($mail);

            // rajouter un mail a la mailbox

            Mail::to(env('MAIL_ADMIN'))
                ->send(new EditorRequest($store));
        }

        return redirect('/dashboard/room')->with('success', 'Room has been successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'show' => ModelsRoom::find($id),
        ];

        return view('pages.room.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit' => ModelsRoom::find($id),
            'icons' => fontawesomeiconlist::all(),
            'categories' => Room_categories::all(),
            'services' => Room_service::all(),
        ];

        return view('pages.room.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Room_categories::all();

        $request->validate([
            "dropcap_before" => "required",
            "dropcap_u" => "required",
            "dropcap_after" => "required",
            "text1" => "required",
            "text2_before" => "required",
            "text2_u" => "required",
            "text2_after" => "required",
            "text3_before" => "required",
            "text3_u" => "required",
            "text3_after" => "required",
            "rating_i_class" => "required",
            "rating_text" => "",
            "price" => "required",
            "name" => "required",
            "slogan" => "required",
            "number_bed" => "required",
            "number_persons" => "required",
            "sq_mt" => "required",
            "room_category_id" => "required",
            "favorite_roomList" => "",
            "images" => "",
        ]);

        $update = ModelsRoom::find($id);
        $update->dropcap_before = $request->dropcap_before;
        $update->dropcap_u = $request->dropcap_u;
        $update->dropcap_after = $request->dropcap_after;
        $update->text1 = $request->text1;
        $update->text2_before = $request->text2_before;
        $update->text2_u = $request->text2_u;
        $update->text2_after = $request->text2_after;
        $update->text3_before = $request->text3_before;
        $update->text3_u = $request->text3_u;
        $update->text3_after = $request->text3_after;
        $update->rating_i_class = $request->rating_i_class;
        $update->rating_text = $request->rating_text;
        $update->price = $request->price;
        $update->name = $request->name;
        $update->slogan = $request->slogan;
        $update->number_bed = $request->number_bed;
        $update->number_persons = $request->number_persons;
        $update->sq_mt = $request->sq_mt;
        $update->room_category_id = $request->room_category_id;
        $request->favorite_roomList == 1 ? $update->favorite_roomList = $request->favorite_roomList :  $update->favorite_roomList = 0;
        if (Auth::user()->roles->first()->id == 3) {
            $update->available = 0;
        } else {
            $update->available = 1;
        }
        $update->save();
        $update->refresh();
        $filePath = '/images/rooms/' . strtolower($categories->where('id', $request->room_category_id)->first()->value);

        // dd($request->file('images'), $filePath);
        if ($request->images) {
            foreach ($request->file('images') as $file) {
                Storage::disk('public')->put($filePath, $file);
                $update->images()->create([
                    'image_img' => $file->hashName(),
                ]);
                $update->refresh();

                Image::make(public_path($filePath) . '/' . $file->hashName())
                    ->fit(370, 230)
                    ->save();
            }
        }

        foreach ($request->services as $service) {
            $update->services()->attach($service, ['available' => 1]);
        }

        if (Auth::user()->roles->first()->id == 3) {

            $editorRequest = new EditorRoomRequest([
                'editor_name' => auth()->user()->name,
                'editor_id' => auth()->user()->id,
                'room_id' => $update->id,
                'action_crud' => 'update',
            ]);
            $editorRequest->save();

            $mail = new Mailbox([
                'title' => 'An editor has created a new room and require your approvement.',
                'read' => 0,
                'archived' => 0,
            ]);

            $editorRequest->mails()->save($mail);

            // rajouter un mail a la mailbox

            Mail::to(env('MAIL_ADMIN'))
                ->send(new EditorRequest($update));
        }

        return redirect('/dashboard/room')->with('success', 'Room has been successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editStatic()
    {
        $data = [
            'edit' => Page_room::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.static.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStatic(Request $request)
    {

        $request->validate([
            "page_title_bg_img" => "file",
            "page_title_room_details_price" => "required",
            "section_title" => "required",
            "reviews_title" => "required",
            "reviews_subtitle" => "required",
            "reviews_5star" => "required",
            "reviews_4star" => "required",
            "reviews_3star" => "required",
            "reviews_2star" => "required",
            "reviews_1star" => "required",
            "service_list_i_class_accepted" => "required",
            "service_list_i_class_refused" => "required",
            "similar_rooms_title" => "required",
            "similar_rooms_subtitle" => "required",


        ]);

        $update = Page_room::find(1);

        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_room_details_price = $request->page_title_room_details_price;
        $update->section_title = $request->section_title;
        $update->reviews_title = $request->reviews_title;
        $update->reviews_subtitle = $request->reviews_subtitle;
        $update->reviews_5star = $request->reviews_5star;
        $update->reviews_4star = $request->reviews_4star;
        $update->reviews_3star = $request->reviews_3star;
        $update->reviews_2star = $request->reviews_2star;
        $update->reviews_1star = $request->reviews_1star;
        $update->service_list_i_class_accepted = $request->service_list_i_class_accepted;
        $update->service_list_i_class_refused = $request->service_list_i_class_refused;
        $update->similar_rooms_title = $request->similar_rooms_title;
        $update->similar_rooms_subtitle = $request->similar_rooms_subtitle;
        $update->save();

        return redirect('/dashboard/room')->with('success', 'Static room page updated.');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editStaticSidebar()
    {
        $data = [
            'edit' => Page_room_sidebar::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.static.sidebar.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStaticSidebar(Request $request)
    {

        $request->validate([
            "sidebar_title" => "required",
            "sidebar_form_email_placeholder" => "required",
            "sidebar_form_roomtype_title" => "required",
            "sidebar_form_roomtype_data_header" => "required",
            "sidebar_form_date_placeholder" => "required",
            "sidebar_form_guestspicker" => "required",
            "sidebar_form_label1" => "required",
            "sidebar_form_label1_data_content" => "required",
            "sidebar_form_label1_data_title" => "required",
            "sidebar_form_label1_i_class" => "required",
            "sidebar_form_label2" => "required",
            "sidebar_form_label2_data_content" => "required",
            "sidebar_form_label2_data_title" => "required",
            "sidebar_form_label2_i_class" => "required",
            "sidebar_form_submit" => "required",


        ]);

        $update = Page_room_sidebar::find(1);
        $update->sidebar_title = $request->sidebar_title;
        $update->sidebar_form_email_placeholder = $request->sidebar_form_email_placeholder;
        $update->sidebar_form_roomtype_title = $request->sidebar_form_roomtype_title;
        $update->sidebar_form_roomtype_data_header = $request->sidebar_form_roomtype_data_header;
        $update->sidebar_form_date_placeholder = $request->sidebar_form_date_placeholder;
        $update->sidebar_form_guestspicker = $request->sidebar_form_guestspicker;
        $update->sidebar_form_label1 = $request->sidebar_form_label1;
        $update->sidebar_form_label1_data_content = $request->sidebar_form_label1_data_content;
        $update->sidebar_form_label1_data_title = $request->sidebar_form_label1_data_title;
        $update->sidebar_form_label1_i_class = $request->sidebar_form_label1_i_class;
        $update->sidebar_form_label2 = $request->sidebar_form_label2;
        $update->sidebar_form_label2_data_content = $request->sidebar_form_label2_data_content;
        $update->sidebar_form_label2_data_title = $request->sidebar_form_label2_data_title;
        $update->sidebar_form_label2_i_class = $request->sidebar_form_label2_i_class;
        $update->sidebar_form_submit = $request->sidebar_form_submit;
        $update->save();

        return redirect('/dashboard/room')->with('success', 'Static room sidebar page updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsRoom::destroy($id);

        return redirect('/dashboard/room')->with('success', 'room has been successfully deleted.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImg($room, $image)
    {
        $category = ModelsRoom::find($room)->categories->value;

        $path = '/images/rooms/' . strtolower($category) . '/' . Room_image::find($image)->image_img;

        Room_image::destroy($image);

        Storage::disk('public')->delete($path);

        return redirect()->back()->with('success', 'room has been successfully deleted.');
    }

    public function roomEditorAdminApprovement(Request $request, $roomId)
    {
        $update = ModelsRoom::find($roomId);
        if ($request->available == 1) {
            $update->available = 1;
        } else {
            $update->available = 0;
        }
        $update->save();

        return redirect('/dashboard/mailbox')->with('success', 'The action has been successfully worked.');
    }
}
