<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\gallery;
use App\Models\Mailbox;
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
use App\Models\Room_categories;
use App\Models\Room_review;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index () {
        $categories = Room_categories::all()->filter(function ($item) {
            foreach ($item->rooms as $room) {
                if ($room->available == true && $room->category_id != null) {
                    return true;
                }
                return false;
            }
        })->unique('id');

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
            'static_video' => Page_home_video::find(1),
            'static_contact' => Page_home_contact_v2::find(1),
            
            // * dynamic
            'revolutionSliders' => Page_home_revolution_slider::all(),
            'aboutProviders' => Page_home_about_providers::all(),
            'rooms' => collect(Room::where('room_category_id', '!=', null)->get())->where('available', true),
            'services' => Page_home_services_service::all(),
            'categories' => $categories,
            'galleries' => Gallery::all(),
            'room_reviews_number' => Room_review::all()->count(),
            'restaurants' => Page_home_restaurant_restaurant::all(),
        ];

        return view('home', $data);
    }

    public function sendForm() {
        $formHome = request()->query('formHome');

        $dataForm = [
            'form_home' => $formHome,
            'form_categoryId' => request('booking-roomtype'),
            'form_email' => request('booking-email') ,
            'form_checkin' => request('booking-checkin') ,
            'form_adults' =>request('booking-adults') ,
            'form_children' =>request('booking-children') ,
        ];

        return redirect("/booking-form")->with('dataForm', $dataForm);
    }

    /* -------------------------------------------------------------------------- */
    /*                    Send function for section CONTACT V2                    */
    /* -------------------------------------------------------------------------- */
    
    public function sendContact() {
        
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $store = new ContactForm();
        $store->name = request('name');
        $store->email = request('email');
        $store->message = request('message');
        $store->save();

        $mail = new Mailbox([
            'title' => $store->name . ' has post a contact form.',
            'read' => 0,
            'archived' => 0,
        ]);
        
        $store->mails()->save($mail);

        return redirect('/');
    }
}
