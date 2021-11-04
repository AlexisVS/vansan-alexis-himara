<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Page_team;
use App\Models\Page_team_team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Team extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static' => Page_team::all(),
            'index' => Page_team_team::all(),
            // 'icons' => fontawesomeiconlist::all(),
        ];
        return view('pages.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'teams' => Page_team_team::all(),
        ];

        return view('pages.team.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "figure_img" => "required|file",
            "figure_text" => "required",
            "details_name" => "required",
            "details_text" => "required",
        ]);

        $store = new Page_team_team;

        if ($request->file('figure_img')) {
            Storage::disk('public')->put('images/staff', $request->file('figure_img'));
            $store->figure_img = $request->file('figure_img')->hashName();
        }
        $store->figure_text = $request->figure_text;
        $store->details_name = $request->details_name;
        $store->details_text = $request->details_text;
        $store->save();

        return redirect('/dashboard/team')->with('success', $store->details_name . ' added to team.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'show' => Page_team_team::find($id),
            // 'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.team.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit' => Page_team_team::find($id),
            'teams' => Page_team_team::all(),
        ];

        return view('pages.team.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "figure_img" => "file",
            "figure_text" => "required",
            "details_name" => "required",
            "details_text" => "required",
        ]);

        $update = Page_team_team::find($id);

        if ($request->file('figure_img')) {
            Storage::disk('public')->put('images/staff', $request->file('figure_img'));
            $update->figure_img = $request->file('figure_img')->hashName();
        }
        $update->figure_text = $request->figure_text;
        $update->details_name = $request->details_name;
        $update->details_text = $request->details_text;
        $update->save();

        return redirect('/dashboard/team')->with('success', $update->details_name . ' edited');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editStatic()
    {
        $data = [
            'edit' => Page_team::find(1),
            // 'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.team.static.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStatic(Request $request)
    {

        $request->validate([
            "page_title_bg_img" => "file",
            "page_title_title" => "required",
            "page_title_li" => "required",
        ]);

        $update = Page_team::find(1);

        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_title = $request->page_title_title;
        $update->page_title_li = $request->page_title_li;
        $update->save();

        return redirect('/dashboard/team')->with('success', 'Static team page updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy  = Page_team_team::find($id);
        $destroy->delete();
        return redirect('/dashboard/team')->with('success', 'Team member deleted.');
    }
}
