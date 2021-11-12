<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class UserReviewAfterBooking extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->delay(now()->addMinutes(1));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'booking' => Booking::all()->reverse()->first(),
        ];

        return $this->from(env('MAIL_USERNAME'))
            ->subject('Client Reviews ' . Auth::user()->name)
            ->view('mail.user-review-booking')
            ->with($data);
    }
}
