<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_booking_form;
use App\Models\Page_booking_form_offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static' => Page_booking_form::all(),
            'index' => Page_booking_form_offer::all(),
            'icons' => fontawesomeiconlist::all(),
        ];
        return view('pages.booking-form.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = [
        //     'icons' => fontawesomeiconlist::all(),
        // ];

        // return view('pages.booking-form.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "img" => "required|file",
        //     "ribbon" => "required",
        //     "offer_price" => "required",
        //     "offer_title" => "required",
        // ]);

        // $store = new Page_booking_form_offer;

        // if ($request->file('img')) {
        //     Storage::disk('public')->put('images/offers', $request->file('img'));
        //     $store->img = $request->file('img')->hashName();
        // }
        // $store->ribbon = $request->ribbon;
        // $store->offer_price = $request->offer_price;
        // $store->offer_title = $request->offer_title;
        // $store->save();

        // return redirect('/dashboard/booking-form')->with('success', $store->offer_price . ' added to team.');
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
            'show' => Page_booking_form_offer::find($id),
        ];

        return view('pages.booking-form.show', $data);
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
            'edit' => Page_booking_form_offer::find($id),
        ];

        return view('pages.booking-form.edit', $data);
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
        $request->validate([
            "img" => "file",
            "ribbon" => "required",
            "offer_price" => "required",
            "offer_title" => "required",
            "room_id" => "required"
        ]);

        $update = Page_booking_form_offer::find($id);

        if ($request->file('img')) {
            Storage::disk('public')->put('images/offers', $request->file('img'));
            $update->img = $request->file('img')->hashName();
        }
        $update->ribbon = $request->ribbon;
        $update->offer_price = $request->offer_price;
        $update->offer_title = $request->offer_title;
        $update->room_id = $request->room_id;
        $update->save();

        return redirect('/dashboard/booking-form')->with('success',  'Offer edited');
    }

    public function editStatic()
    {
        $data = [
            'edit' => Page_booking_form::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.booking-form.static.edit', $data);
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
            "page_title_title" => "required",
            "page_title_text" => "required",
            "section_title_title" => "required",
            "section_title_subtitle" => "required",
            "section_title_text" => "required",
            "section_title_not_connected" => "required",
            "form_name_text" => "required",
            "form_name_placeholder" => "required",
            "form_email_text" => "required",
            "form_email_placeholder" => "required",
            "form_phone_text" => "required",
            "form_phone_placeholder" => "required",
            "select_label" => "required",
            "select_title" => "required",
            "select_data_header" => "required",
            "form_check_text" => "required",
            "form_check_title" => "required",
            "form_check_data_content" => "required",
            "form_check_i_class" => "required",
            "guest_text" => "required",
            "guest_title" => "required",
            "guest_data_content" => "required",
            "guest_i_class" => "required",
            "dropdown_text" => "required",
            "dropdown_adult_text" => "required",
            "dropdown_adult_data_content" => "required",
            "dropdown_adult_i_class" => "required",
            "dropdown_children_text" => "required",
            "dropdown_children_data_content" => "required",
            "dropdown_children_i_class" => "required",
            "room_type_title" => "required",
            "room_type_select_title" => "required",
            "room_type_select_data_header" => "required",
            "room_name_title" => "required",
            "room_name_select_title" => "required",
            "room_name_select_data_header" => "required",
            "comment_title" => "required",
            "comment_placeholder" => "required",
            "submit_i_class" => "required",
            "submit_text" => "required",
            "sidebar_title" => "required",
            "sidebar_subtitle" => "required",
        ]);

        $update = Page_booking_form::find(1);

        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_title = $request->page_title_title;
        $update->page_title_text = $request->page_title_text;
        $update->section_title_title = $request->section_title_title;
        $update->section_title_subtitle = $request->section_title_subtitle;
        $update->section_title_text = $request->section_title_text;
        $update->section_title_not_connected = $request->section_title_not_connected;
        $update->form_name_text = $request->form_name_text;
        $update->form_name_placeholder = $request->form_name_placeholder;
        $update->form_email_text = $request->form_email_text;
        $update->form_email_placeholder = $request->form_email_placeholder;
        $update->form_phone_text = $request->form_phone_text;
        $update->form_phone_placeholder = $request->form_phone_placeholder;
        $update->select_label = $request->select_label;
        $update->select_title = $request->select_title;
        $update->select_data_header = $request->select_data_header;
        $update->form_check_text = $request->form_check_text;
        $update->form_check_title = $request->form_check_title;
        $update->form_check_data_content = $request->form_check_data_content;
        $update->form_check_i_class = $request->form_check_i_class;
        $update->guest_text = $request->guest_text;
        $update->guest_title = $request->guest_title;
        $update->guest_data_content = $request->guest_data_content;
        $update->guest_i_class = $request->guest_i_class;
        $update->dropdown_text = $request->dropdown_text;
        $update->dropdown_adult_text = $request->dropdown_adult_text;
        $update->dropdown_adult_data_content = $request->dropdown_adult_data_content;
        $update->dropdown_adult_i_class = $request->dropdown_adult_i_class;
        $update->dropdown_children_text = $request->dropdown_children_text;
        $update->dropdown_children_data_content = $request->dropdown_children_data_content;
        $update->dropdown_children_i_class = $request->dropdown_children_i_class;
        $update->room_type_title = $request->room_type_title;
        $update->room_type_select_title = $request->room_type_select_title;
        $update->room_type_select_data_header = $request->room_type_select_data_header;
        $update->room_name_title = $request->room_name_title;
        $update->room_name_select_title = $request->room_name_select_title;
        $update->room_name_select_data_header = $request->room_name_select_data_header;
        $update->comment_title = $request->comment_title;
        $update->comment_placeholder = $request->comment_placeholder;
        $update->submit_i_class = $request->submit_i_class;
        $update->submit_text = $request->submit_text;
        $update->sidebar_title = $request->sidebar_title;
        $update->sidebar_subtitle = $request->sidebar_subtitle;
        $update->save();

        return redirect('/dashboard/booking-form')->with('success', 'Static booking-form page updated');
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
