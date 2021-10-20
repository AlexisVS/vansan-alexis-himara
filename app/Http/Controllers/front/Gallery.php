<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Gallery as ModelsGallery;
use App\Models\Page_contact;
use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function index () {
        $data = [
            'static_contact' => Page_contact::find(1),
            'galleries' => ModelsGallery::all(),
        ];

        return view('front.pages.gallery', $data);
    }
}
