<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Room_review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomReview extends Controller
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
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.review.create', $data);
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
            "userImage_img" => "required|file",
            "rating" => "required",
            "rating_i_class" => "required",
            "review_info" => "required",
            "review_date" => "required",
            "review_location" => "required",
            "review_text" => "required",
        ]);

        $store = new Room_review();
        if ($request->file('userImage_img')) {
            Storage::disk('public')->put('/images/users', $request->file('userImage_img'));
            $store->userImage_img = $request->file('userImage_img')->hashName();
        }
        $store->rating = $request->rating;
        $store->rating_i_class = $request->rating_i_class;
        $store->review_info = $request->review_info;
        $store->review_date = $request->review_date;
        $store->review_location = $request->review_location;
        $store->review_text = $request->review_text;
        $store->room_id = request()->route()->parameter('room');

        $store->save();

        return redirect('/dashboard/room/' . $store->room_id)->with('success', 'room service has been successfully created.');
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
            'show' => Room_review::find($id),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.review.show', $data);
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
            'edit' => Room_review::find($id),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.room.review.edit', $data);
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
            "userImage_img" => "required|file",
            "rating" => "required",
            "rating_i_class" => "required",
            "review_info" => "required",
            "review_date" => "required",
            "review_location" => "required",
            "review_text" => "required",
        ]);

        $update = Room_review::find($id);
        if ($request->file('userImage_img')) {
            Storage::disk('public')->put('/images/users', $request->file('userImage_img'));
            $update->userImage_img = $request->file('userImage_img')->hashName();
        }
        $update->rating = $request->rating;
        $update->rating_i_class = $request->rating_i_class;
        $update->review_info = $request->review_info;
        $update->review_date = $request->review_date;
        $update->review_location = $request->review_location;
        $update->review_text = $request->review_text;

        $update->save();

        return redirect('/dashboard/room/' . $update->room_id)->with('success', 'room service has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room_review::destroy($id);

        return redirect('success', 'The review has been successfully deleted.');
    }
}
