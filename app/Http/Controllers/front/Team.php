<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_team;
use App\Models\Page_team_team;
use Illuminate\Http\Request;

class Team extends Controller
{
    public function index () {
        $housekeeper = Page_team_team::where('figure_text', 'Housekeeper' )->get()->take(1);
        $teamRest = Page_team_team::all()->shuffle()->take(7);
        $teams = collect([$housekeeper, Page_team_team::all()->shuffle()->take(7)])->collapse();

        $data = [
            'static_team' => Page_team::find(1),
            'teams' => $teams,
        ];

        return view('front.pages.team', $data);
    }
}
