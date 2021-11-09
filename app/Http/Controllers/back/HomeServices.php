<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Flaticon;
use App\Models\Page_home_services_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeServices extends Controller
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
            'flaticons' => Flaticon::all(), 
        ];

        return view('pages.home.services.create', $data);
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
            'fig_img' => 'required|file',
            'fig_title' => 'required',
            'slider_i_flaticon' => 'required',
            'slider_title' => 'required',
            'slider_text' => 'required',
        ]);

        $store = new Page_home_services_service;
        if ($request->file('fig_img')) {
            Storage::disk('public')->put('images/services', $request->file('fig_img'));
            $store->fig_img = $request->file('fig_img')->hashName();
        }
        $store->fig_title = $request->fig_title;
        $store->slider_i_flaticon = $request->slider_i_flaticon;
        $store->slider_title = $request->slider_title;
        $store->slider_text = $request->slider_text;
        $store->save();

        return redirect('/dashboard/home')->with('success', 'Your service has been successfully created.');
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
            'flaticons' => Flaticon::all(),
            'edit' => Page_home_services_service::find($id), 
        ];

        return view('pages.home.services.create', $data);
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
            'fig_img' => 'file',
            'fig_title' => 'required',
            'slider_i_flaticon' => 'required',
            'slider_title' => 'required',
            'slider_text' => 'required',
        ]);

        $update = Page_home_services_service::find($id);
        if ($request->file('fig_img')) {
            Storage::disk('public')->put('images/services', $request->file('fig_img'));
            $update->fig_img = $request->file('fig_img')->hashName();
        }
        $update->fig_title = $request->fig_title;
        $update->slider_i_flaticon = $request->slider_i_flaticon;
        $update->slider_title = $request->slider_title;
        $update->slider_text = $request->slider_text;
        $update->save();

        return redirect('/dashboard/home')->with('success', 'Your service has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page_home_services_service::destroy($id);

        return redirect('/dashboard/home')->with('success', 'Your service has been successfully deleted.');
    }
}
