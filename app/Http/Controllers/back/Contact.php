<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Contact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static' => Page_contact::all(),
        ];
        return view('pages.contact.index', $data);
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

    public function editStatic()
    {
        $data = [
            'edit' => Page_contact::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.contact.static.edit', $data);
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
            "page_title_li" => "required",
            "section_title_title" => "required",
            "section_title_subtitle" => "required",
            "section_title_text" => "required",
            "form_name" => "required",
            "form_email" => "required",
            "form_phone" => "required",
            "form_subject" => "required",
            "form_message" => "required",
            "form_submit" => "required",
            "sidebar_map_i_class" => "required",
            "sidebar_map_canvas_address" => "required",
            "sidebar_info_li1_a_href" => "required",
            "sidebar_info_li1_i_class" => "required",
            "sidebar_info_li1_text" => "required",
            "sidebar_info_li2_a_href" => "required",
            "sidebar_info_li2_i_class" => "required",
            "sidebar_info_li2_text" => "required",
            "sidebar_info_li3_a_href" => "required",
            "sidebar_info_li3_i_class" => "required",
            "sidebar_info_li3_text" => "required",
            "sidebar_info_li4_a_href" => "required",
            "sidebar_info_li4_i_class" => "required",
            "sidebar_info_li4_text" => "required",
            "sidebar_info_li5_a_href" => "required",
            "sidebar_info_li5_i_class" => "required",
            "sidebar_info_li5_text" => "required",
            "sidebar_social_facebook_title" => "required",
            "sidebar_social_facebook_href" => "required",
            "sidebar_social_facebook_i_class" => "required",
            "sidebar_social_twitter_title" => "required",
            "sidebar_social_twitter_href" => "required",
            "sidebar_social_twitter_i_class" => "required",
            "sidebar_social_googleplus_title" => "required",
            "sidebar_social_googleplus_href" => "required",
            "sidebar_social_googleplus_i_class" => "required",
            "sidebar_social_pinterest_title" => "required",
            "sidebar_social_pinterest_href" => "required",
            "sidebar_social_pinterest_i_class" => "required",
            "sidebar_social_linkedin_title" => "required",
            "sidebar_social_linkedin_href" => "required",
            "sidebar_social_linkedin_i_class" => "required",
            "sidebar_social_youtube_title" => "required",
            "sidebar_social_youtube_href" => "required",
            "sidebar_social_youtube_i_class" => "required",
            "sidebar_social_tripadvisor_title" => "required",
            "sidebar_social_tripadvisor_href" => "required",
            "sidebar_social_tripadvisor_i_class" => "required",
        ]);

        $update = Page_contact::find(1);

        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_title = $request->page_title_title;
        $update->page_title_li = $request->page_title_li;
        $update->section_title_title = $request->section_title_title;
        $update->section_title_subtitle = $request->section_title_subtitle;
        $update->section_title_text = $request->section_title_text;
        $update->form_name = $request->form_name;
        $update->form_email = $request->form_email;
        $update->form_phone = $request->form_phone;
        $update->form_subject = $request->form_subject;
        $update->form_message = $request->form_message;
        $update->form_submit = $request->form_submit;
        $update->sidebar_map_i_class = $request->sidebar_map_i_class;
        $update->sidebar_map_canvas_address = $request->sidebar_map_canvas_address;
        $update->sidebar_info_li1_a_href = $request->sidebar_info_li1_a_href;
        $update->sidebar_info_li1_i_class = $request->sidebar_info_li1_i_class;
        $update->sidebar_info_li1_text = $request->sidebar_info_li1_text;
        $update->sidebar_info_li2_a_href = $request->sidebar_info_li2_a_href;
        $update->sidebar_info_li2_i_class = $request->sidebar_info_li2_i_class;
        $update->sidebar_info_li2_text = $request->sidebar_info_li2_text;
        $update->sidebar_info_li3_a_href = $request->sidebar_info_li3_a_href;
        $update->sidebar_info_li3_i_class = $request->sidebar_info_li3_i_class;
        $update->sidebar_info_li3_text = $request->sidebar_info_li3_text;
        $update->sidebar_info_li4_a_href = $request->sidebar_info_li4_a_href;
        $update->sidebar_info_li4_i_class = $request->sidebar_info_li4_i_class;
        $update->sidebar_info_li4_text = $request->sidebar_info_li4_text;
        $update->sidebar_info_li5_a_href = $request->sidebar_info_li5_a_href;
        $update->sidebar_info_li5_i_class = $request->sidebar_info_li5_i_class;
        $update->sidebar_info_li5_text = $request->sidebar_info_li5_text;
        $update->sidebar_social_facebook_title = $request->sidebar_social_facebook_title;
        $update->sidebar_social_facebook_href = $request->sidebar_social_facebook_href;
        $update->sidebar_social_facebook_i_class = $request->sidebar_social_facebook_i_class;
        $update->sidebar_social_twitter_title = $request->sidebar_social_twitter_title;
        $update->sidebar_social_twitter_href = $request->sidebar_social_twitter_href;
        $update->sidebar_social_twitter_i_class = $request->sidebar_social_twitter_i_class;
        $update->sidebar_social_googleplus_title = $request->sidebar_social_googleplus_title;
        $update->sidebar_social_googleplus_href = $request->sidebar_social_googleplus_href;
        $update->sidebar_social_googleplus_i_class = $request->sidebar_social_googleplus_i_class;
        $update->sidebar_social_pinterest_title = $request->sidebar_social_pinterest_title;
        $update->sidebar_social_pinterest_href = $request->sidebar_social_pinterest_href;
        $update->sidebar_social_pinterest_i_class = $request->sidebar_social_pinterest_i_class;
        $update->sidebar_social_linkedin_title = $request->sidebar_social_linkedin_title;
        $update->sidebar_social_linkedin_href = $request->sidebar_social_linkedin_href;
        $update->sidebar_social_linkedin_i_class = $request->sidebar_social_linkedin_i_class;
        $update->sidebar_social_youtube_title = $request->sidebar_social_youtube_title;
        $update->sidebar_social_youtube_href = $request->sidebar_social_youtube_href;
        $update->sidebar_social_youtube_i_class = $request->sidebar_social_youtube_i_class;
        $update->sidebar_social_tripadvisor_title = $request->sidebar_social_tripadvisor_title;
        $update->sidebar_social_tripadvisor_href = $request->sidebar_social_tripadvisor_href;
        $update->sidebar_social_tripadvisor_i_class = $request->sidebar_social_tripadvisor_i_class;
        $update->save();

        return redirect('/dashboard/contact')->with('success', 'Static contact page updated');
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
