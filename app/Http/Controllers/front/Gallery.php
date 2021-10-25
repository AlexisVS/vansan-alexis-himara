<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Gallery as ModelsGallery;
use App\Models\Page_gallery;
use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function index () {
        $data = [
            'static_gallery' => Page_gallery::find(1),
            'galleries' => ModelsGallery::all(),
        ];

        return view('front.pages.gallery', $data);
    }
}
