<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\page_home_about_providers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeProviders extends Controller
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
        return view('pages.home.providers.create');
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
            'provider_href' => 'required',
            'provider_img' => 'required|file',
        ]);

        $store = new page_home_about_providers();
        $store->provider_href = $request->provider_href;

        if ($request->file('provider_img')) {
            Storage::disk('public')->put('images/providers', $request->file('provider_img'));
            $store->provider_img = $request->file('provider_img')->hashName();
        }
        $store->save();
        return redirect('/dashboard/home')->with('success', 'Your provider has been successfully created.');
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
            'edit' => page_home_about_providers::find($id),
        ];

        return view('pages.home.providers.edit', $data);
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
            'provider_href' => 'required',
            'provider_img' => 'file',
        ]);

        $store = page_home_about_providers::find($id);
        $store->provider_href = $request->provider_href;

        if ($request->file('provider_img')) {
            Storage::disk('public')->put('images/slider', $request->file('provider_img'));
            $store->provider_img = $request->file('provider_img')->hashName();
        }
        $store->save();
        return redirect('/dashboard/home')->with('success', 'Your provider has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        page_home_about_providers::destroy($id);

        return redirect('/dashboard/home')->with('success', 'Your provider has been successfully removed.');
    }
}
