<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_home_testimonial_testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTestimonials extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

        return view('pages.home.testimonials.create', $data);
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
            'img' => 'required|file',
            'author_name' => 'required',
            'author_location' => 'required',
            'rating' => 'required',
            'rating_i_class' => 'required',
            'text' => 'required',
        ]);

        $store = new Page_home_testimonial_testimonial();
        if ($request->file('img')) {
            Storage::disk('public')->put('images/users', $request->file('img'));
            $store->img = $request->file('img')->hashName();
        }
        $store->author_name = $request->author_name;
        $store->author_location = $request->author_location;
        $store->rating = $request->rating;
        $store->rating_i_class = $request->rating_i_class;
        $store->text = $request->text;
        $store->save();

        return redirect('/dashboard/home')->with('success', 'Your testimonial has been successfully created.');
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
            'icons' => fontawesomeiconlist::all(), 
            'show' => Page_home_testimonial_testimonial::find($id),
        ];

        return view('pages.home.testimonials.show', $data);
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
            'icons' => fontawesomeiconlist::all(), 
            'edit' => Page_home_testimonial_testimonial::find($id),
        ];

        return view('pages.home.testimonials.edit', $data);
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
            'img' => 'file',
            'author_name' => 'required',
            'author_location' => 'required',
            'rating' => 'required',
            'rating_i_class' => 'required',
            'text' => 'required',
        ]);

        $update = Page_home_testimonial_testimonial::find($id);
        if ($request->file('img')) {
            Storage::disk('public')->put('images/users', $request->file('img'));
            $update->img = $request->file('img')->hashName();
        }
        $update->author_name = $request->author_name;
        $update->author_location = $request->author_location;
        $update->rating = $request->rating;
        $update->rating_i_class = $request->rating_i_class;
        $update->text = $request->text;
        $update->save();

        return redirect('/dashboard/home')->with('success', 'Your testimonial has been successfully created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page_home_testimonial_testimonial::destroy($id);

        return redirect('/dashboard/home')->with('success', 'Your comment has been successfully removed.');
    }
}
