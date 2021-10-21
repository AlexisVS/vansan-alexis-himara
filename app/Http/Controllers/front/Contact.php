<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_contact;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index () {
        $data = [
            'static_contact' => Page_contact::find(1),
        ];

        return view('front.pages.contact', $data);
    }
}
