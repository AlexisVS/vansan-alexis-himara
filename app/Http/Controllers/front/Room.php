<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Room as ModelsRoom;
use Illuminate\Http\Request;

class Room extends Controller
{
    public function index () {
        return view('front.pages.rooms-list');
    }

    public function show () {
        return view('front.pages.room');
    }
}