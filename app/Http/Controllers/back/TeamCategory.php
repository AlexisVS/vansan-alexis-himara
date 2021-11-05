<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\PageTeamTeamCategory;
use Illuminate\Http\Request;

class TeamCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'create' => PageTeamTeamCategory::all()
        ];

        return view('pages.team.category.create', $data);
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
            'name' => 'required',
        ]);

        $store = new PageTeamTeamCategory;
        $store->name = $request->name;
        $store->save();

        return redirect('/dashboard/team')->with('success', 'Team category' . $store->name . 'created.');
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
            'show' => PageTeamTeamCategory::find($id)
        ];

        return view('pages.team.category.show', $data);
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
            'edit' => PageTeamTeamCategory::find($id)
        ];

        return view('pages.team.category.edit', $data);
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
            'name' => 'required',
        ]);

        $store = PageTeamTeamCategory::find($id);
        $store->name = $request->name;
        $store->save();

        return redirect('/dashboard/team')->with('success', 'Team category' . $store->name . 'created.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy  = PageTeamTeamCategory::find($id);
        $destroy->delete();
        return redirect('/dashboard/team')->with('success', 'Team category deleted.');
    }
}
