<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\ContactForm;
use App\Models\Mailbox as ModelsMailbox;
use Illuminate\Http\Request;

class Mailbox extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'mails' => ModelsMailbox::all()->where('archived', false),
        ];

        return view('pages.mailbox.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexArchive()
    {
        $data = [
            'mails' => ModelsMailbox::all()->where('archived', true),
            'archive' => 'Archive',
        ];

        return view('pages.mailbox.index', $data);
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)  
    {
        $show = ModelsMailbox::find($id);
        $show->read = 1;
        $show->save();

        $data = [
            'show' => ModelsMailbox::find($id),
            'archive' => 'Archive',
        ];

        return view('pages.mailbox.show', $data);
    }


    /**
     * Show the form for editing the specified resource.
     *
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = ModelsMailbox::find($id);
        $update->read = 1;
        $update->archived = 1;
        $update->save();

        return redirect('/dashboard/mailbox');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $target = ModelsMailbox::find($id)->mailable_type;
        $idTarget = ModelsMailbox::find($id)->mailable_id;

        switch ($target) {
            case 'App\Models\Booking':
                Booking::destroy($idTarget);
                break;
            
            case 'App\Models\ContactForm':
                ContactForm::destroy($idTarget);
                break;
        }

        ModelsMailbox::destroy($id);

        return redirect('/dashboard/mailbox');
    }
}
