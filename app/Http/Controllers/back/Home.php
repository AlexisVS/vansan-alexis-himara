<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Gallery;
use App\Models\page_home_about;
use App\Models\page_home_about_providers;
use App\Models\Page_home_booking_form;
use App\Models\Page_home_contact_v2;
use App\Models\Page_home_gallery;
use App\Models\Page_home_new;
use App\Models\Page_home_our_rooms;
use App\Models\Page_home_restaurant;
use App\Models\Page_home_restaurant_restaurant;
use App\Models\Page_home_revolution_slider;
use App\Models\Page_home_services;
use App\Models\Page_home_services_service;
use App\Models\Page_home_testimonial;
use App\Models\Page_home_testimonial_testimonial;
use App\Models\page_home_video;
use App\Models\Room;
use App\Models\Room_review;
use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            // * dynamic
            'sliders' => Page_home_revolution_slider::all(),
            'providers' => page_home_about_providers::all(),
            'services' => Page_home_services_service::all(),
            'testimonials' => Page_home_testimonial_testimonial::all(),
            'restaurants' => Page_home_restaurant_restaurant::all(),
        ];

        return view('pages.home.index', $data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStatic()
    {
        $data = [
            // * static
            'static_bookingForm' => Page_home_booking_form::find(1),
            'static_about' => page_home_about::find(1),
            'static_room' => Page_home_our_rooms::find(1),
            'static_service' => Page_home_services::find(1),
            'static_gallery' => Page_home_gallery::find(1),
            'static_testimonial' => Page_home_testimonial::find(1),
            'static_restaurant' => Page_home_restaurant::find(1),
            'static_new' => Page_home_new::find(1),
            'static_video' => page_home_video::find(1),
            'static_contact' => Page_home_contact_v2::find(1),
        ];

        return view('pages.home.static.index', $data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editStatic()
    {
        $data = [
            // * static
            'static_bookingForm' => Page_home_booking_form::find(1),
            'static_about' => page_home_about::find(1),
            'static_room' => Page_home_our_rooms::find(1),
            'static_service' => Page_home_services::find(1),
            'static_gallery' => Page_home_gallery::find(1),
            'static_testimonial' => Page_home_testimonial::find(1),
            'static_restaurant' => Page_home_restaurant::find(1),
            'static_new' => Page_home_new::find(1),
            'static_video' => page_home_video::find(1),
            'static_contact' => Page_home_contact_v2::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.home.static.edit', $data);
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
