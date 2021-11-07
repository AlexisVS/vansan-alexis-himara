<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Room_categories;
use Illuminate\Http\Request;

class RoomCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'index' => Room_categories::all(),
        ];

        return view('pages.room.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.room.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Room_categories();
        $store->value = $request->value;
        $store->text = $request->value;
        $store->save();

        return redirect('/dashbaord/room/category')->with('success', 'Room category successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'edit' => Room_categories::find($id),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.category.edit', $data);
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
        $store = Room_categories::find($id);
        $store->value = $request->value;
        $store->text = $request->value;
        $store->save();

        return redirect('/dashbaord/room')->with('success', 'Room category successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room_categories::destroy($id);

        return redirect('/dashboard/room/category')->with('success', 'The category has been successfully deleted.');
    }
}
