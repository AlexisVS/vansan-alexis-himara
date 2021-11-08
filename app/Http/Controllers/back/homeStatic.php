<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\page_home_about;
use App\Models\Page_home_booking_form;
use App\Models\Page_home_contact_v2;
use App\Models\Page_home_gallery;
use App\Models\Page_home_new;
use App\Models\Page_home_our_rooms;
use App\Models\Page_home_restaurant;
use App\Models\Page_home_services;
use App\Models\Page_home_testimonial;
use App\Models\page_home_video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeStatic extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBookingForm(Request $request)
    {
        $request->validate([
            "name_text" => "required",
            "name_a_title" => "required",
            "name_a_data_content" => "required",
            "name_i_class" => "required",
            "name_input_placeholder" => "required",
            "email_text" => "required",
            "email_a_title" => "required",
            "email_a_data_content" => "required",
            "email_i_class" => "required",
            "email_input_placeholder" => "required",
            "roomtype_text" => "required",
            "roomtype_a_title" => "required",
            "roomtype_a_data_content" => "required",
            "roomtype_i_class" => "required",
            "roomtype_select_title" => "required",
            "date_text" => "required",
            "date_a_title" => "required",
            "date_a_data_content" => "required",
            "date_i_class" => "required",
            "date_input_placeholder" => "required",
            "guest_text" => "required",
            "guest_a_title" => "required",
            "guest_a_data_content" => "required",
            "guest_i_class" => "required",
            "guest_guestpicker" => "required",
            "guest_adult_text" => "required",
            "guest_adult_a_data_content" => "required",
            "guest_adult_a_i_class" => "required",
            "guest_children_text" => "required",
            "guest_children_a_data_content" => "required",
            "guest_children_a_i_class" => "required",
            "guest_submit_text" => "required",
            "guest_submit_a_href" => "required",
            "guest_submit_a_text" => "required",
        ]);

        $update = Page_home_booking_form::find(1);
        $update->name_text = $request->name_text;
        $update->name_a_title = $request->name_a_title;
        $update->name_a_data_content = $request->name_a_data_content;
        $update->name_i_class = $request->name_i_class;
        $update->name_input_placeholder = $request->name_input_placeholder;
        $update->email_text = $request->email_text;
        $update->email_a_title = $request->email_a_title;
        $update->email_a_data_content = $request->email_a_data_content;
        $update->email_i_class = $request->email_i_class;
        $update->email_input_placeholder = $request->email_input_placeholder;
        $update->roomtype_text = $request->roomtype_text;
        $update->roomtype_a_title = $request->roomtype_a_title;
        $update->roomtype_a_data_content = $request->roomtype_a_data_content;
        $update->roomtype_i_class = $request->roomtype_i_class;
        $update->roomtype_select_title = $request->roomtype_select_title;
        $update->date_text = $request->date_text;
        $update->date_a_title = $request->date_a_title;
        $update->date_a_data_content = $request->date_a_data_content;
        $update->date_i_class = $request->date_i_class;
        $update->date_input_placeholder = $request->date_input_placeholder;
        $update->guest_text = $request->guest_text;
        $update->guest_a_title = $request->guest_a_title;
        $update->guest_a_data_content = $request->guest_a_data_content;
        $update->guest_i_class = $request->guest_i_class;
        $update->guest_guestpicker = $request->guest_guestpicker;
        $update->guest_adult_text = $request->guest_adult_text;
        $update->guest_adult_a_data_content = $request->guest_adult_a_data_content;
        $update->guest_adult_a_i_class = $request->guest_adult_a_i_class;
        $update->guest_children_text = $request->guest_children_text;
        $update->guest_children_a_data_content = $request->guest_children_a_data_content;
        $update->guest_children_a_i_class = $request->guest_children_a_i_class;
        $update->guest_submit_text = $request->guest_submit_text;
        $update->guest_submit_a_href = $request->guest_submit_a_href;
        $update->guest_submit_a_text = $request->guest_submit_a_text;
        $update->save();

        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAbout(Request $request)
    {
        $request->validate([
            "section_title_title" => "",
            "section_title_title_span" => "",
            "section_title_title_after" => "",
            "section_title_section_subtitle" => "required",
            "info_branding_p" => "required",
            "providers_text" => "required",
            "content_img" => "file",
            "content_star_i_class" => "required",
            "content_title" => "required",
            "content_text" => "required",
        ]);

        $update = page_home_about::find(1);
        $update->section_title_title = $request->section_title_title;
        $update->section_title_title_span = $request->section_title_title_span;
        $update->section_title_title_after = $request->section_title_title_after;
        $update->section_title_section_subtitle = $request->section_title_section_subtitle;
        $update->info_branding_p = $request->info_branding_p;
        $update->providers_text = $request->providers_text;
        if ($request->file('content_img')) {
            Storage::disk('public')->put('images', $request->file('content_img'));
            $update->content_img = $request->file('content_img')->hashName();
        }
        $update->content_star_i_class = $request->content_star_i_class;
        $update->content_title = $request->content_title;
        $update->content_text = $request->content_text;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRoom(Request $request)
    {
        $request->validate([
            "section_title_title" => "",
            "section_title_title_span" => "",
            "section_title_title_after" => "",
            "section_title_subtitle" => "required",
            "section_title_a_href" => "required",
            "section_title_a_text" => "required",
        ]);

        $update = Page_home_our_rooms::find(1);
        $update->section_title_title = $request->section_title_title;
        $update->section_title_title_span = $request->section_title_title_span;
        $update->section_title_title_after = $request->section_title_title_after;
        $update->section_title_subtitle = $request->section_title_subtitle;
        $update->section_title_a_href = $request->section_title_a_href;
        $update->section_title_a_text = $request->section_title_a_text;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateService(Request $request)
    {
        $request->validate([
            "section_title_h4" => "",
            "section_title_span" => "",
            "section_title_h4_after" => "",
            "section_title_text" => "required",
        ]);

        $update = Page_home_services::find(1);
        $update->section_title_h4 = $request->section_title_h4;
        $update->section_title_span = $request->section_title_span;
        $update->section_title_h4_after = $request->section_title_h4_after;
        $update->section_title_text = $request->section_title_text;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGallery(Request $request)
    {
        $request->validate([
            "section_title_h4" => "",
            "section_title_span" => "",
            "section_title_h4_after" => "",
            "section_title_subtitle" => "required",
            "section_title_a_href" => "required",
            "section_title_a_text" => "required",
        ]);

        $update = Page_home_gallery::find(1);
        $update->section_title_h4 = $request->section_title_h4;
        $update->section_title_span = $request->section_title_span;
        $update->section_title_h4_after = $request->section_title_h4_after;
        $update->section_title_subtitle = $request->section_title_subtitle;
        $update->section_title_a_href = $request->section_title_a_href;
        $update->section_title_a_text = $request->section_title_a_text;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTestimonial(Request $request)
    {
        $request->validate([
            "section_title_h4" => "",
            "section_title_span" => "",
            "section_title_h4_after" => "",
            "section_title_p" => "required",
        ]);

        $update = Page_home_testimonial::find(1);
        $update->section_title_h4 = $request->section_title_h4;
        $update->section_title_span = $request->section_title_span;
        $update->section_title_h4_after = $request->section_title_h4_after;
        $update->section_title_p = $request->section_title_p;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRestaurant(Request $request)
    {
        $request->validate([
            "section_title_data_src_img" => "file",
            "section_title_h4" => "required",
            "section_title_p" => "required",
        ]);

        $update = Page_home_restaurant::find(1);
        if ($request->file('section_title_data_src_img')) {
            Storage::disk('public')->put('images', $request->file('section_title_data_src_img'));
            $update->section_title_data_src_img = $request->file('section_title_data_src_img')->hashName();
        }
        $update->section_title_h4 = $request->section_title_h4;
        $update->section_title_p = $request->section_title_p;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNew(Request $request)
    {
        $request->validate([
            "section_title_h4" => "",
            "section_title_span" => "",
            "section_title_h4_after" => "",
            "section_title_p" => "required",
        ]);

        $update = Page_home_new::find(1);
        $update->section_title_h4 = $request->section_title_h4;
        $update->section_title_span = $request->section_title_span;
        $update->section_title_h4_after = $request->section_title_h4_after;
        $update->section_title_p = $request->section_title_p;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request)
    {
        $request->validate([
            "video_src_img" => "file",
            "video_href" => "required",
            "video_i_class" => "required",
        ]);

        $update = page_home_video::find(1);
        if ($request->file('video_src_img')) {
            Storage::disk('public')->put('images', $request->file('video_src_img'));
            $update->video_src_img = $request->file('video_src_img')->hashName();
        }
        $update->video_href = $request->video_href;
        $update->video_i_class = $request->video_i_class;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateContact(Request $request)
    {
        $request->validate([
            "section_title1_h4" => "required",
            "section_title1_p" => "required",
            "contact_details_li1_i_class" => "required",
            "contact_details_li1_text" => "required",
            "contact_details_li2_i_class" => "required",
            "contact_details_li2_text" => "required",
            "contact_details_li3_i_class" => "required",
            "contact_details_li3_text" => "required",
            "contact_details_li4_i_class" => "required",
            "contact_details_li4_text" => "required",
            "contact_details_li5_i_class" => "required",
            "contact_details_li5_text" => "required",
            "contact_details_li5_a_href" => "required",
            "contact_details_li5_a_text" => "required",
            "section_title2_h4" => "required",
            "section_title2_p" => "required",
            "form_input1_placeholder" => "required",
            "form_input2_placeholder" => "required",
            "form_input3_placeholder" => "required",
            "form_submit_i_class" => "required",
            "form_submit_text" => "required",
        ]);

        $update = Page_home_contact_v2::find(1);
        $update->section_title1_h4 = $request->section_title1_h4;
        $update->section_title1_p = $request->section_title1_p;
        $update->contact_details_li1_i_class = $request->contact_details_li1_i_class;
        $update->contact_details_li1_text = $request->contact_details_li1_text;
        $update->contact_details_li2_i_class = $request->contact_details_li2_i_class;
        $update->contact_details_li2_text = $request->contact_details_li2_text;
        $update->contact_details_li3_i_class = $request->contact_details_li3_i_class;
        $update->contact_details_li3_text = $request->contact_details_li3_text;
        $update->contact_details_li4_i_class = $request->contact_details_li4_i_class;
        $update->contact_details_li4_text = $request->contact_details_li4_text;
        $update->contact_details_li5_i_class = $request->contact_details_li5_i_class;
        $update->contact_details_li5_text = $request->contact_details_li5_text;
        $update->contact_details_li5_a_href = $request->contact_details_li5_a_href;
        $update->contact_details_li5_a_text = $request->contact_details_li5_a_text;
        $update->section_title2_h4 = $request->section_title2_h4;
        $update->section_title2_p = $request->section_title2_p;
        $update->form_input1_placeholder = $request->form_input1_placeholder;
        $update->form_input2_placeholder = $request->form_input2_placeholder;
        $update->form_input3_placeholder = $request->form_input3_placeholder;
        $update->form_submit_i_class = $request->form_submit_i_class;
        $update->form_submit_text = $request->form_submit_text;
        $update->save();
        return redirect('/dashboard/home/index-static')->with('success', 'Your static asset has been successfully updated.');
    }
}
