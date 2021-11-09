<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_home_revolution_slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSlider extends Controller
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

        return view('pages.home.slider.create', $data);
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
            'mainImage_img' => "required|file",
            'layer1_text' => 'required',
            'layer2_text' => 'required',
            'order' => '',
        ]);

        $store = new Page_home_revolution_slider;

        if ($request->order >= '2') {

            $sliders = Page_home_revolution_slider::all();

            foreach ($sliders->where('order', $request->order) as $slider) {
                $slider->order = null;
                $slider->save();
            }
        }

        if ($request->file('mainImage_img')) {
            Storage::disk('public')->put('images/slider', $request->file('mainImage_img'));
            $store->mainImage_img = $request->file('mainImage_img')->hashName();
        }
        $store->layer1_text = $request->layer1_text;
        $store->layer2_text = $request->layer2_text;
        $store->layer3_href = "";
        $store->layer3_i_class = "";
        $store->layer3_text = "";
        $store->layer4_href = "";
        $store->layer4_i_class = "";
        $store->layer4_text = "";
        $store->layer5_i_class = "";
        $store->layer6_text = "";
        if ($request->order != '') {
            $store->order = $request->order;
        } else {
            $store->order = null;
        }
        $store->save();

        return redirect('/dashboard/home')->with('success', 'The slide has been successfully created.');
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
            'show' => Page_home_revolution_slider::find($id),
        ];

        return view('pages.home.slider.show', $data);
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
            'edit' => Page_home_revolution_slider::find($id),
        ];

        return view('pages.home.slider.edit', $data);
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
            'mainImage_img' => "file",
            'layer1_text' => 'required',
            'layer2_text' => 'required',
            'order' => '',
        ]);

        $update = Page_home_revolution_slider::find($id);

        if ($request->order >= '2') {

            $sliders = Page_home_revolution_slider::all();
    
            $sliders->where('order', $request->order);
    
            foreach ($sliders as $slider) {
                $slider->order = null;
                $slider->save();
            }
        }


        if ($request->file('mainImage_img')) {
            Storage::disk('public')->put('images/slider', $request->file('mainImage_img'));
            $update->mainImage_img = $request->file('mainImage_img')->hashName();
        }
        $update->layer1_text = $request->layer1_text;
        $update->layer2_text = $request->layer2_text;
        $update->layer3_href = "";
        $update->layer3_i_class = "";
        $update->layer3_text = "";
        $update->layer4_href = "";
        $update->layer4_i_class = "";
        $update->layer4_text = "";
        $update->layer5_i_class = "";
        $update->layer6_text = "";
        if ($request->order != '') {
            $update->order = $request->order;
        } else {
            $update->order = null;
        }
        $update->save();

        return redirect('/dashboard/home')->with('success', 'The slide has been successfully updated.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPrincipaleSlide()
    {
        $data = [
            'edit' => Page_home_revolution_slider::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.home.slider.editPrincipale', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePrincipaleSlide(Request $request)
    {
        $request->validate([
            'mainImage_img' => "file",
            'layer1_text' => 'required',
            'layer2_text' => 'required',
            'layer3_href' => 'required',
            'layer3_i_class' => 'required',
            'layer3_text' => 'required',
            'layer4_href' => 'required',
            'layer4_i_class' => 'required',
            'layer4_text' => 'required',
            'layer5_i_class' => 'required',
            'layer6_text' => 'required',
            'order' => '',
        ]);

        $update = Page_home_revolution_slider::find(1);

        if ($request->file('mainImage_img')) {
            Storage::disk('public')->put('images/slider', $request->file('mainImage_img'));
            $update->mainImage_img = $request->file('mainImage_img')->hashName();
        }
        $update->layer1_text = $request->layer1_text;
        $update->layer2_text = $request->layer2_text;
        $update->layer3_href = $request->layer3_href;
        $update->layer3_i_class = $request->layer3_i_class;
        $update->layer3_text = $request->layer3_text;
        $update->layer4_href = $request->layer4_href;
        $update->layer4_i_class = $request->layer4_i_class;
        $update->layer4_text = $request->layer4_text;
        $update->layer5_i_class = $request->layer5_i_class;
        $update->layer6_text = $request->layer6_text;
        $update->save();

        return redirect('/dashboard/home')->with('success', 'The slide has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page_home_revolution_slider::destroy($id);

        return redirect('/dashboard/home')->with('success', 'The slide has been successfully deleted.');
    }
}
