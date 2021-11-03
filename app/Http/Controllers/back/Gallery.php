<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Gallery as ModelsGallery;
use App\Models\Page_gallery;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Gallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'static_gallery' => Page_gallery::all(),
            'galleries' => ModelsGallery::all(),
            // 'icons' => fontawesomeiconlist::all(),
        ];



        return view('pages.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'static_gallery' => Page_gallery::all(),
            'galleries' => ModelsGallery::all(),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.gallery.store', $data);
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
     * @return \Illuminate\Http\Response
     */
    public function editStatic()
    {
        $data = [
            'edit' => Page_gallery::find(1),
            // 'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.gallery.static.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateStatic(Request $request )
    {

        $request->validate([
            "page_title_bg_img" => "",
            "page_title_title" => "required",
            "page_title_li" => "required",
        ]);

        $update = Page_gallery::find(1);

        if ($request->file('page_title_bg_img')) {
            Storage::disk('public')->put('images', $request->file('page_title_bg_img'));
            $update->page_title_bg_img = $request->file('page_title_bg_img')->hashName();
        }
        $update->page_title_title = $request->page_title_title;
        $update->page_title_li = $request->page_title_li;
        $update->save();

        return redirect()->back()->with('success', 'Static gallery updated');
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
