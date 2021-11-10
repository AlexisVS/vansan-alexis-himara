<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\AdminReservation;
use App\Mail\ReservationDetails;
use App\Models\Booking;
use App\Models\Page_booking_form;
use App\Models\Page_booking_form_land;
use App\Models\Page_booking_form_land2;
use App\Models\Page_booking_form_offer;
use App\Models\Room_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function store () {
        request()->validate([
            'booking_country' => "required",
            'booking_date' => "required",
            'booking_adults' => "required",
            'booking_children' => "required",
            'booking_room' => "required",
            'booking_comments' => "required",
        ]);

        $store = new Booking();
        $store->country = request('booking_country');
        $store->date = request('booking_date');
        $store->adults = request('booking_adults');
        $store->children = request('booking_children');
        $store->room = request('booking_room');
        $store->comments = request('booking_comments');
        $store->name = Auth::user()->name;
        $store->email = Auth::user()->email;
        $store->phone = Auth::user()->phone;
        $store->save();
        $store->refresh();
        
        $store->mails->title = "Reservation from " . $store->name . 'for ' . $store->room . '.' ;
        $store->mails->read = false;
        $store->mails->archived =false;
        $store->mails->save();

        Booking::all()->fresh();

        Mail::to(Auth::user()->email)
        ->send(new ReservationDetails);

        Mail::to('alexis.vansan1440@gmail.com')
        ->send(new AdminReservation);

        return redirect("/");
    }
}
