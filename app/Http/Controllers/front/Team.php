<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_team;
use App\Models\Page_team_team;
use Illuminate\Http\Request;

class Team extends Controller
{
    public function index () {
        $data = [
            'static_team' => Page_team::find(1),
            'teams' => Page_team_team::all(),
        ];

        return view('front.pages.team', $data);
    }
}
