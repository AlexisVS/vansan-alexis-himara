<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\page_home_about;
use App\Models\page_home_about_providers;
use App\Models\Page_home_booking_form;
use App\Models\Page_home_contact_v2;
use App\Models\Page_home_gallery;
use App\Models\Page_home_gallery_gallery;
use App\Models\Page_home_new;
use App\Models\Page_home_new_new;
use App\Models\Page_home_our_rooms;
use App\Models\Page_home_our_rooms_room;
use App\Models\Page_home_restaurant;
use App\Models\Page_home_restaurant_restaurant;
use App\Models\Page_home_revolution_slider;
use App\Models\Page_home_services;
use App\Models\Page_home_services_service;
use App\Models\Page_home_testimonial;
use App\Models\Page_home_testimonial_testimonial;
use App\Models\page_home_video;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index () {
        $compact = [
            // * static
            'bookingForm' => Page_home_booking_form::find(1),
            'about' => page_home_about::find(1),
            'room' => Page_home_our_rooms::find(1),
            'service' => Page_home_services::find(1),
            'gallery' => Page_home_gallery::find(1),
            'testimonial' => Page_home_testimonial::find(1),
            'restaurant' => Page_home_restaurant::find(1),
            'new' => Page_home_new::find(1),
            'video' => Page_home_video::find(1),
            'contact' => Page_home_contact_v2::find(1),
            
            // * dynamic
            'revolutionSliders' => Page_home_revolution_slider::all(),
            'abouts' => Page_home_about_providers::all(),
            'rooms' => Page_home_our_rooms_room::all(),
            'services' => Page_home_services_service::all(),
            'gallery' => Page_home_gallery_gallery::all(),
            'testimonials' => Page_home_testimonial_testimonial::all(),
            'restaurants' => Page_home_restaurant_restaurant::all(),
            'news' => Page_home_new_new::all(),
        ];
        return view('home', $compact);
    }
}
