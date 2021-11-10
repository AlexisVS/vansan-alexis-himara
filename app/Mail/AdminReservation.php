<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class AdminReservation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = [
            'site_title' => env('APP_NAME'),
            'booking' => Booking::all()->reverse()->first(),
        ];

        return $this->from(env('MAIL_USERNAME'))
            ->subject('Client Reservation ' . Auth::user()->name)
            ->view('mail.admin-template')->with($mail);
            
    }
}
