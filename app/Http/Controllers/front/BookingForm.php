<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_booking_form;
use App\Models\Page_booking_form_land;
use App\Models\Page_booking_form_land2;
use App\Models\Page_booking_form_offer;
use Illuminate\Http\Request;

class BookingForm extends Controller
{
    public function index()
    {
        $data = [
            // * static
            'static_bookingForm' => Page_booking_form::find(1),
            'static_bookingFormLand' => Page_booking_form_land::find(1),
            'static_bookingFormLand2' => Page_booking_form_land2::find(1),

            // * dynamic
            'bookingFormOffers' => Page_booking_form_offer::all(),
        ];

        return view('front.pages.booking-form', $data);
    }

    public function saveFormRoomSidebar()
    {
        return dd(request()->query());
    }
}
