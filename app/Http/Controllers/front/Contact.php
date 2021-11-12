<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Mailbox;
use App\Models\Page_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Contact extends Controller
{
    public function index () {
        $data = [
            'static_contact' => Page_contact::find(1),
        ];

        return view('front.pages.contact', $data);
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $store = new ContactForm([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $store->save();

        $mail = new Mailbox([
            'title' => $request->subject,
            'read' => 0,
            'archived' => 0,
        ]);

        $store->mails()->save($mail);

        return redirect('/contact');
    }

}
