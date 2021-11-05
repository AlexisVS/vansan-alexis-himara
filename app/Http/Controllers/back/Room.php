<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_room;
use App\Models\Page_room_sidebar;
use App\Models\Room as ModelsRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'rooms' => ModelsRoom::withCount(['images', 'services'])->get(),
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        //
    }
}
