<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_roomlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static' => Page_roomlist::all(),
        ];
        return view('pages.room-list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editStatic()
    {
        $data = [
            'edit' => Page_roomlist::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room-list.static.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatic(Request $request)
    {
        $request->validate([
            "page_title_bg_img" => "file",
            "page_title_a_text" => "required",
            "page_title_li" => "required",
            "room_list_room_price_price" => "required",
            "room_list_room_price_a_text1" => "required",
            "room_list_room_price_a_text2" => "required",
            "sidebar_search_placeholder" => "required",
            "sidebar_search_i_class" => "required",
            "sidebar_widget1_title" => "required",
            "sidebar_widget2_title" => "required",
        ]);

        $update = Page_roomlist::find(1);
        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_a_text = $request->page_title_a_text;
        $update->page_title_li = $request->page_title_li;
        $update->room_list_room_price_price = $request->room_list_room_price_price;
        $update->room_list_room_price_a_text1 = $request->room_list_room_price_a_text1;
        $update->room_list_room_price_a_text2 = $request->room_list_room_price_a_text2;
        $update->sidebar_search_placeholder = $request->sidebar_search_placeholder;
        $update->sidebar_search_i_class = $request->sidebar_search_i_class;
        $update->sidebar_widget1_title = $request->sidebar_widget1_title;
        $update->sidebar_widget2_title = $request->sidebar_widget2_title;
        $update->save();

        return redirect('/dashboard/list-room')->with('success', 'Static room list has been successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
