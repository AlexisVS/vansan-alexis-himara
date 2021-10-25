<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_roomlist;
use App\Models\Room as ModelsRoom;
use App\Models\Room_categories;
use App\Models\Room_service;
use App\Models\Room_service_room;
use Illuminate\Http\Request;

class Room extends Controller
{
    public function index () {
        $data = [
            // * static
            'static_roomList' => Page_roomlist::find(1),

            // * dynamic
            // 'roomServicesRooms' => Room_service_room::all(),
            'roomCategories' => Room_categories::all(),
            'roomServices' => Room_service::all()
        ];

        return view('front.pages.rooms-list', $data);
    }

    public function show () {
        return view('front.pages.room');
    }
}
