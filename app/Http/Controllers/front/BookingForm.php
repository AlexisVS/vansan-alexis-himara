<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Jobs\MailAfterBookingFinish;
use App\Jobs\RoomAvailableAfterBookingFinish;
use App\Mail\AdminReservation;
use App\Mail\ReservationDetails;
use App\Mail\UserReviewAfterBooking;
use App\Models\Booking;
use App\Models\fontawesomeiconlist;
use App\Models\Mailbox;
use App\Models\Page_booking_form;
use App\Models\Page_booking_form_land;
use App\Models\Page_booking_form_land2;
use App\Models\Page_booking_form_offer;
use App\Models\Room;
use App\Models\Room_categories;
use App\Models\Room_review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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

    public function store()
    {
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
        $store->user_id = Auth::user()->id;
        $store->save();
        $store->fresh();

        $mail = new Mailbox([
            'title' => 'Reservation from ' . $store->name . ' for ' . Room::find($store->room)->name . ' room.',
            'read' => 0,
            'archived' => 0,
        ]);

        $store->mails()->save($mail);

        
        Mail::to($store->email)
        ->send(new ReservationDetails);

        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createReviewMail()
    {
        $data = [
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('front.pages.booking-form-store-review', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReviewMail(Request $request)
    {
        $request->validate([
            'rating' => 'required',
            'rating_i_class' => 'required',
            'review_info' => 'required',
            'review_date' => 'required',
            'review_location' => 'required',
            'review_text' => 'required',
        ]);

        $store = new Room_review();
        $store->userImage_img = User::find($request->user_id)->profile_img;
        $store->rating = $request->rating;
        $store->rating_i_class = $request->rating_i_class;
        $store->review_info = $request->review_info;
        $store->review_date = $request->review_date;
        $store->review_location = $request->review_location;
        $store->review_text = $request->review_text;
        $store->room_id = $request->room_id;
        $store->save();

        return redirect('/');
    }

    public function updateBookingRequest (Request $request, $id) {

        $update = Booking::find($id);
        $update->approvement = $request->approvement;
        $update->save();

        if ($request->approvement == 1) {
            $room = Room::find($request->room_id);
            $room->available = 0;
            $room->save();
    
            RoomAvailableAfterBookingFinish::dispatch($room)
                ->delay(now()->addMinutes(2));
    
            Mail::to(env('MAIL_ADMIN'))
                ->send(new AdminReservation);
    
            Mail::to($update->email)
                ->send(new UserReviewAfterBooking);
        }
        
        return redirect('/');

    }
}