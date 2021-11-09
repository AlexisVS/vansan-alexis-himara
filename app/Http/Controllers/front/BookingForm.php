<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_booking_form;
use App\Models\Page_booking_form_land;
use App\Models\Page_booking_form_land2;
use App\Models\Page_booking_form_offer;
use App\Models\Room_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BookingForm extends Controller
{
    public function index()
    {
        $categories = Room_categories::all()->filter(function ($item) {
            foreach ($item->rooms as $room) {
                if ($room->available == true) {
                    return true;
                }
                return false;
            }
        })->unique('id');

        $data = [

            // * static
            'static_bookingForm' => Page_booking_form::find(1),
            'static_bookingFormLand' => Page_booking_form_land::find(1),
            'static_bookingFormLand2' => Page_booking_form_land2::find(1),

            // * dynamic
            'bookingFormOffers' => Page_booking_form_offer::all(),
            'room_categories' => Room_categories::all(),
            'categories' => $categories,
        ];

        // * BookingForm de la page room -> sidebar -> form

        // je doit prendre toute les categories
        // ou les rooms qui lui sont associés
        // on leur available a true

        $dataForm = [
            'form_home' => request()->session()->get('dataForm.form_home'),
            'form_roomId' => request()->session()->get('dataForm.form_roomId'),
            'form_categoryId' => request()->session()->get('dataForm.form_categoryId'),
            'form_email' => request()->session()->get('dataForm.form_email'),
            'form_checkin' => request()->session()->get('dataForm.form_checkin'),
            'form_adults' => request()->session()->get('dataForm.form_adults'),
            'form_children' => request()->session()->get('dataForm.form_children'),
        ];

        // * fusion de $data && $dataForm
        if ($dataForm['form_categoryId'] != null) {
            $data = Arr::add($data, 'dataForm', $dataForm);
        }

        // dd($data);

        return view('front.pages.booking-form', $data);
    }

    /* -------------------------------------------------------------------------- */
    /*                       Send mail and new model Mailbox                      */
    /* -------------------------------------------------------------------------- */

    public function send () {

    }
}
