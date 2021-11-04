<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Gallery as ModelsGallery;
use App\Models\GalleryFilter;
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
            'gallery_filters' => GalleryFilter::all(),
        ];

        return view('pages.gallery.create', $data);
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
            "class_filter" => "required",
            "img" => "",
            "figcaption" => "required",
        ]);

        $store = new ModelsGallery;

        if ($request->file('img')) {
            Storage::disk('public')->put('images/gallery', $request->file('img'));
            $store->img = $request->file('img')->hashName();
        }
        if ($request->class_filer == []) {
            $store->class_filter = implode(' ', $request->class_filter);
        } else {
            $store->class_filter = $request->class_filter;
        }
        $store->figcaption = $request->figcaption;
        $store->save();

        return redirect('/dashboard/gallery')->with('success', 'Gallery element created.');
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
            'show' => ModelsGallery::find($id),
            // 'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.gallery.show', $data);
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
            'edit' => ModelsGallery::find($id),
            'gallery_filters' => GalleryFilter::all(),
        ];

        return view('pages.gallery.edit', $data);
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
            "class_filter" => "required",
            "img" => "",
            "figcaption" => "required",
        ]);

        $update = ModelsGallery::find($id);

        if ($request->file('img')) {
            Storage::disk('public')->put('images/gallery', $request->file('img'));
            $update->img = $request->file('img')->hashName();
        }
        if ($request->class_filer == []) {
            $update->class_filter = implode(' ', $request->class_filter);
        } else {
            $update->class_filter = $request->class_filter;
        }
        $update->figcaption = $request->figcaption;
        $update->save();

        return redirect('/dashboard/gallery')->with('success', 'Gallery element updated.');
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
    public function updateStatic(Request $request)
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

        return redirect('/dashboard/gallery')->with('success', 'Static gallery page updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy  = ModelsGallery::find($id);
        $destroy->delete();
        return redirect('/dashboard/gallery')->with('success', 'Gallery element deleted.');
    }
}
