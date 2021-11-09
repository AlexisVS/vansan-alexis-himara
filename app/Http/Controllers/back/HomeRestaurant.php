<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Page_home_restaurant_restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeRestaurant extends Controller
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
        return view('pages.home.restaurant.create');
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
            'title_name' => 'required',
            'title_price' => 'required',
            'text' => 'required',
        ]);

        $store = new Page_home_restaurant_restaurant();
        
        if ($request->file('img')) {
            Storage::disk('public')->put('images/restaurant', $request->file('img'));
            $store->img = $request->file('img')->hashName();
        }
        $store->title_name = $request->title_name;
        $store->title_price = '€' .$request->title_price;
        $store->text = $request->text;
        $store->save();
        return redirect('/dashboard/home')->with('success', 'Your meal has been successfully added.');
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
            'edit' => Page_home_restaurant_restaurant::find($id),
        ];

        return view('pages.home.restaurant.edit', $data);
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
            'title_name' => 'required',
            'title_price' => 'required',
            'text' => 'required',
        ]);

        $update = Page_home_restaurant_restaurant::find($id);
        
        if ($request->file('img')) {
            Storage::disk('public')->put('images/restaurant', $request->file('img'));
            $update->img = $request->file('img')->hashName();
        }
        $update->title_name = $request->title_name;
        $update->title_price = '€' . $request->title_price;
        $update->text = $request->text;
        $update->save();
        return redirect('/dashboard/home')->with('success', 'Your meal has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page_home_restaurant_restaurant::destroy($id);

        return redirect('/dashboard/home')->with('success', 'Your meal has been successfully destroyed.');
    }
}
