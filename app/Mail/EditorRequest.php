<?php

namespace App\Mail;

use App\Models\Room;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class EditorRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $room;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            "id" => Auth::user()->id,
            "name" => Auth::user()->name,
            "email" => Auth::user()->email,
            "phone" => Auth::user()->phone,
            "profile_img" => Auth::user()->profile_img,
            "roles" => Auth::user()->roles,
            "room" => $this->room,
        ];

        return $this->from(env('MAIL_ADMIN'))
        ->subject('Editor ' . Auth::user()->name . ' has deposed a request for the room.')
        ->view('mail.editor-room', $data);
    }
}
