<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Room;
use App\Models\Room_categories;
use App\Models\Room_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $store->value = ucfirst($request->value);
        $store->text = $request->value;
        $store->save();

        $path = public_path().'/images/rooms/' . strtolower($store->value);
        File::makeDirectory($path);

        return redirect('/dashboard/room/category')->with('success', 'Room category successfully created.');
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

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $data = [
    //         'edit' => Room_categories::find($id),
    //         'icons' => fontawesomeiconlist::all(),
    //     ];

    //     return view('pages.room.category.edit', $data);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $store = Room_categories::find($id);
    //     $store->value = $request->value;
    //     $store->text = $request->value;
    //     $store->save();

    //     return redirect('/dashboard/room/category')->with('success', 'Room category successfully updated.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rooms = Room::where('room_category_id', $id)->get();

        foreach ($rooms as $room) {
            $room->room_category_id = null;
            $room->save();
        }

        $destroy = Room_categories::find($id);

        $path = public_path().'/images/rooms/' . strtolower($destroy->value);

        File::deleteDirectory($path);

        $roomIds = $rooms->pluck('id')->toArray();

        $images = Room_image::all();

        foreach ($images as $image) {

            foreach ($roomIds as $roomId) {

                if ($image->room_id == $roomId) {

                    $image->delete();

                }
            }
        }

        $destroy->delete();
        // dd($roomIds, $images);

        return redirect('/dashboard/room/category')->with('success', 'The category has been successfully deleted.');
    }
}
