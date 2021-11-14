<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\ImageBrand;
use App\Models\Layout_footer;
use App\Models\Layout_header;
use App\Models\Layout_top_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Layout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'top_menu' => Layout_top_menu::find(1),
            'header' => Layout_header::find(1),
            'footer' => Layout_footer::find(1),
        ];

        return view('pages.layout.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = [
            'top_menu' => Layout_top_menu::find(1),
            'header' => Layout_header::find(1),
            'footer' => Layout_footer::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.layout.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateImageBrand(Request $request)
    {
        $request->validate([
            'image_brand_img' => 'required',
        ]);

        $file = $request->file('image_brand_img');




        $update = ImageBrand::find(1);

        Storage::disk('public')->put('/images', $request->file('image_brand_img'));

        $update->image_brand_img = $request->file('image_brand_img')->hashName();

        $update->save();



        Image::make(public_path() . '/images/' . $request->file('image_brand_img')->hashName())
            ->fit(150, 20)
            ->save();
        return redirect('/dashboard/layout')->with('success', 'Your image brand has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTopMenu(Request $request)
    {
        $request->validate([
            'welcome_mssg' => 'required',
            'a_tel_href' => 'required',
            'a_tel_i_class' => 'required',
            'a_tel_text' => 'required',
            'a_mail_href' => 'required',
            'a_mail_i_class' => 'required',
            'a_mail_text' => 'required',
        ]);

        $update = Layout_top_menu::find(1);
        $update->welcome_mssg = $request->welcome_mssg;
        $update->a_tel_href = $request->a_tel_href;
        $update->a_tel_i_class = $request->a_tel_i_class;
        $update->a_tel_text = $request->a_tel_text;
        $update->a_mail_href = $request->a_mail_href;
        $update->a_mail_i_class = $request->a_mail_i_class;
        $update->a_mail_text = $request->a_mail_text;
        $update->save();
        return redirect('/dashboard/layout')->with('success', 'Your top menu has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateHeader(Request $request)
    {
        $request->validate([
            'brand_href' => 'required',
            'menu_li1_href' => 'required',
            'menu_li1_text' => 'required',
            'menu_li2_href' => 'required',
            'menu_li2_text' => 'required',
            'menu_li3_href' => 'required',
            'menu_li3_text' => 'required',
            'menu_li4_href' => 'required',
            'menu_li4_text' => 'required',
            'menu_li5_href' => 'required',
            'menu_li5_text' => 'required',
            'menu_li6a_href' => 'required',
            'menu_li6a_i_class' => 'required',
            'menu_li6a_text' => 'required',
            'menu_li6b_href' => 'required',
            'menu_li6b_i_class' => 'required',
            'menu_li6b_text' => 'required',
        ]);

        $update = Layout_header::find(1);
        $update->brand_href = $request->brand_href;
        $update->menu_li1_href = $request->menu_li1_href;
        $update->menu_li1_text = $request->menu_li1_text;
        $update->menu_li2_href = $request->menu_li2_href;
        $update->menu_li2_text = $request->menu_li2_text;
        $update->menu_li3_href = $request->menu_li3_href;
        $update->menu_li3_text = $request->menu_li3_text;
        $update->menu_li4_href = $request->menu_li4_href;
        $update->menu_li4_text = $request->menu_li4_text;
        $update->menu_li5_href = $request->menu_li5_href;
        $update->menu_li5_text = $request->menu_li5_text;
        $update->menu_li6a_href = $request->menu_li6a_href;
        $update->menu_li6a_i_class = $request->menu_li6a_i_class;
        $update->menu_li6a_text = $request->menu_li6a_text;
        $update->menu_li6b_href = $request->menu_li6b_href;
        $update->menu_li6b_i_class = $request->menu_li6b_i_class;
        $update->menu_li6b_text = $request->menu_li6b_text;
        $update->save();
        return redirect('/dashboard/layout')->with('success', 'Your header has been successfully updated.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateFooter(Request $request)
    {
        $request->validate([
            'w1_inner_text' => 'required',
            'w1_a_href' => 'required',
            'w1_a_span' => 'required',
            'w1_a_img' => 'file',
            'w2_h3' => 'required',
            'w3_h3' => 'required',
            'w3_a1_href' => 'required',
            'w3_a1_text' => 'required',
            'w3_a2_href' => 'required',
            'w3_a2_text' => 'required',
            'w3_a3_href' => 'required',
            'w3_a3_text' => 'required',
            'w3_a4_href' => 'required',
            'w3_a4_text' => 'required',
            'w3_a5_href' => 'required',
            'w3_a5_text' => 'required',
            'w4_h3' => 'required',
            'w4_li1_i_class' => 'required',
            'w4_li1_text' => 'required',
            'w4_li2_i_class' => 'required',
            'w4_li2_text' => 'required',
            'w4_li3_i_class' => 'required',
            'w4_li3_text' => 'required',
            'w4_li4_i_class' => 'required',
            'w4_li4_text' => 'required',
            'w4_li5_i_class' => 'required',
            'w4_li5_text' => 'required',
            'w4_li5_li_text' => 'required',
            'w4_li5_a_text' => 'required',
            'sf_copyright' => 'required',
            'sf_copyright_href' => 'required',
            'sf_copyright_text' => 'required',
            'sf_sm_facebook_class' => 'required',
            'sf_sm_facebook_title' => 'required',
            'sf_sm_facebook_href' => 'required',
            'sf_sm_facebook_i_class' => 'required',
            'sf_sm_twitter_class' => 'required',
            'sf_sm_twitter_title' => 'required',
            'sf_sm_twitter_href' => 'required',
            'sf_sm_twitter_i_class' => 'required',
            'sf_sm_googleplus_class' => 'required',
            'sf_sm_googleplus_title' => 'required',
            'sf_sm_googleplus_href' => 'required',
            'sf_sm_googleplus_i_class' => 'required',
            'sf_sm_pinterest_class' => 'required',
            'sf_sm_pinterest_title' => 'required',
            'sf_sm_pinterest_href' => 'required',
            'sf_sm_pinterest_i_class' => 'required',
            'sf_sm_linkedin_class' => 'required',
            'sf_sm_linkedin_title' => 'required',
            'sf_sm_linkedin_href' => 'required',
            'sf_sm_linkedin_i_class' => 'required',
            'sf_sm_youtube_class' => 'required',
            'sf_sm_youtube_title' => 'required',
            'sf_sm_youtube_href' => 'required',
            'sf_sm_youtube_i_class' => 'required',
            'sf_sm_instagram_class' => 'required',
            'sf_sm_instagram_title' => 'required',
            'sf_sm_instagram_href' => 'required',
            'sf_sm_instagram_i_class' => 'required',
        ]);

        $update = Layout_footer::find(1);
        $update->w1_inner_text = $request->w1_inner_text;
        $update->w1_a_href = $request->w1_a_href;
        $update->w1_a_span = $request->w1_a_span;
        if ($request->file('w1_a_img')) {
            Storage::disk('public')->put('images/icons', $request->file('w1_a_img'));
            $update->w1_a_img = $request->file('w1_a_img')->hashName();
        }
        $update->w2_h3 = $request->w2_h3;
        $update->w3_h3 = $request->w3_h3;
        $update->w3_a1_href = $request->w3_a1_href;
        $update->w3_a1_text = $request->w3_a1_text;
        $update->w3_a2_href = $request->w3_a2_href;
        $update->w3_a2_text = $request->w3_a2_text;
        $update->w3_a3_href = $request->w3_a3_href;
        $update->w3_a3_text = $request->w3_a3_text;
        $update->w3_a4_href = $request->w3_a4_href;
        $update->w3_a4_text = $request->w3_a4_text;
        $update->w3_a5_href = $request->w3_a5_href;
        $update->w3_a5_text = $request->w3_a5_text;
        $update->w4_h3 = $request->w4_h3;
        $update->w4_li1_i_class = $request->w4_li1_i_class;
        $update->w4_li1_text = $request->w4_li1_text;
        $update->w4_li2_i_class = $request->w4_li2_i_class;
        $update->w4_li2_text = $request->w4_li2_text;
        $update->w4_li3_i_class = $request->w4_li3_i_class;
        $update->w4_li3_text = $request->w4_li3_text;
        $update->w4_li4_i_class = $request->w4_li4_i_class;
        $update->w4_li4_text = $request->w4_li4_text;
        $update->w4_li5_i_class = $request->w4_li5_i_class;
        $update->w4_li5_text = $request->w4_li5_text;
        $update->w4_li5_li_text = $request->w4_li5_li_text;
        $update->w4_li5_a_text = $request->w4_li5_a_text;
        $update->sf_copyright = $request->sf_copyright;
        $update->sf_copyright_href = $request->sf_copyright_href;
        $update->sf_copyright_text = $request->sf_copyright_text;
        $update->sf_sm_facebook_class = $request->sf_sm_facebook_class;
        $update->sf_sm_facebook_title = $request->sf_sm_facebook_title;
        $update->sf_sm_facebook_href = $request->sf_sm_facebook_href;
        $update->sf_sm_facebook_i_class = $request->sf_sm_facebook_i_class;
        $update->sf_sm_twitter_class = $request->sf_sm_twitter_class;
        $update->sf_sm_twitter_title = $request->sf_sm_twitter_title;
        $update->sf_sm_twitter_href = $request->sf_sm_twitter_href;
        $update->sf_sm_twitter_i_class = $request->sf_sm_twitter_i_class;
        $update->sf_sm_googleplus_class = $request->sf_sm_googleplus_class;
        $update->sf_sm_googleplus_title = $request->sf_sm_googleplus_title;
        $update->sf_sm_googleplus_href = $request->sf_sm_googleplus_href;
        $update->sf_sm_googleplus_i_class = $request->sf_sm_googleplus_i_class;
        $update->sf_sm_pinterest_class = $request->sf_sm_pinterest_class;
        $update->sf_sm_pinterest_title = $request->sf_sm_pinterest_title;
        $update->sf_sm_pinterest_href = $request->sf_sm_pinterest_href;
        $update->sf_sm_pinterest_i_class = $request->sf_sm_pinterest_i_class;
        $update->sf_sm_linkedin_class = $request->sf_sm_linkedin_class;
        $update->sf_sm_linkedin_title = $request->sf_sm_linkedin_title;
        $update->sf_sm_linkedin_href = $request->sf_sm_linkedin_href;
        $update->sf_sm_linkedin_i_class = $request->sf_sm_linkedin_i_class;
        $update->sf_sm_youtube_class = $request->sf_sm_youtube_class;
        $update->sf_sm_youtube_title = $request->sf_sm_youtube_title;
        $update->sf_sm_youtube_href = $request->sf_sm_youtube_href;
        $update->sf_sm_youtube_i_class = $request->sf_sm_youtube_i_class;
        $update->sf_sm_instagram_class = $request->sf_sm_instagram_class;
        $update->sf_sm_instagram_title = $request->sf_sm_instagram_title;
        $update->sf_sm_instagram_href = $request->sf_sm_instagram_href;
        $update->sf_sm_instagram_i_class = $request->sf_sm_instagram_i_class;
        $update->save();
        return redirect('/dashboard/layout')->with('success', 'Your footer has been successfully updated.');
    }
}
