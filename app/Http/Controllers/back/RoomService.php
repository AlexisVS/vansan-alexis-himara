<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Room_service;
use Illuminate\Http\Request;

class RoomService extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'index' => Room_service::all(),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.service.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.service.create', $data);
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
            "room_service_text" => "required",
            "span_card" => "",
            "i_class" => "",
            "similar_rooms_room_services_i_data_content" => "",
            "similar_rooms_room_services_i_data_title" => "",
        ]);

        $store = new Room_service();
        $store->room_service_text = $request->room_service_text;
        $store->span_card = $request->span_card;
        $store->i_class = $request->i_class;
        $store->similar_rooms_room_services_i_data_content = $request->similar_rooms_room_services_i_data_content;
        $store->similar_rooms_room_services_i_data_title = $request->similar_rooms_room_services_i_data_title;
        $store->save();

        return redirect("/dashboard/room/service")->with('success', 'Room service has been successfully created.');
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
            'show' => Room_service::find($id),
        ];

        return view('pages.room.service.show', $data);
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
            'edit' => Room_service::find($id),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.service.edit', $data);
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
            "room_service_text" => "required",
            "span_card" => "",
            "i_class" => "",
            "similar_rooms_room_services_i_data_content" => "",
            "similar_rooms_room_services_i_data_title" => "",
        ]);

        $update = Room_service::find($id);
        $update->room_service_text = $request->room_service_text;
        $update->span_card = $request->span_card;
        $update->i_class = $request->i_class;
        $update->similar_rooms_room_services_i_data_content = $request->similar_rooms_room_services_i_data_content;
        $update->similar_rooms_room_services_i_data_title = $request->similar_rooms_room_services_i_data_title;
        $update->save();

        return redirect("/dashboard/room/service")->with('success', 'Room service has been successfully created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room_service::destroy($id);

        return redirect('/dashboard/room/service')->with('success', 'Room service has been successfully deleted.');
    }
}
