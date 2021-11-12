<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rooms = Room::all();
        // dd(collect($rooms->first())->keys());
        $rooms = Room::all();
        // dd($rooms->shuffle());

        return view('dashboard');
    }
}
