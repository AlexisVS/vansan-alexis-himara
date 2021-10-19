<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\page_home_about;
use App\Models\page_home_about_providers;
use App\Models\Page_home_booking_form;
use App\Models\Page_home_contact_v2;
use App\Models\Page_home_Gallery;
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
use Illuminate\Http\Request;

class home extends Controller
{
    public function index () {
        $compact = [
            // * static
            'static_bookingForm' => Page_home_booking_form::find(1),
            'static_about' => page_home_about::find(1),
            'static_room' => Page_home_our_rooms::find(1),
            'static_service' => Page_home_services::find(1),
            'static_gallery' => Page_home_gallery::find(1),
            'static_testimonial' => Page_home_testimonial::find(1),
            'static_restaurant' => Page_home_restaurant::find(1),
            'static_new' => Page_home_new::find(1),
            'static_video' => Page_home_video::find(1),
            'static_contact' => Page_home_contact_v2::find(1),
            
            // * dynamic
            'revolutionSliders' => Page_home_revolution_slider::all(),
            'abouts' => Page_home_about_providers::all(),
            'rooms' => Room::all(),
            'services' => Page_home_services_service::all(),
            'gallery' => Gallery::all(),
            'testimonials' => Page_home_testimonial_testimonial::all(),
            'restaurants' => Page_home_restaurant_restaurant::all(),
        ];
        return view('home', $compact);
    }
}
