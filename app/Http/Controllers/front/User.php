<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Mailbox;
use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails = Mailbox::whereHasMorph(
            'mailable',
            [Booking::class],
            function (Builder $query) {
                $query->where('user_id', auth()->user()->id);
            }
        )->get();

        $data = [
            'mails' => $mails,
        ];

        return view('front.pages.user-profile', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMail($id)
    {
        $data = [
            'show' => Mailbox::find($id),
        ];
    
        return view('front.pages.user-mail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
            'name' => 'required',
            'email' => "required",
            'phone' => "required",
            "profile_img" => "file",
        ]);

        $update = ModelsUser::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        if ($request->file('profile_img')) {
            Storage::disk('public')->put('images/users', $request->file('profile_img'));
            $update->profile_img = $request->file('profile_img')->hashName();
        }
        $update->save();
        return redirect("/profile")->with('success', 'Your profile has bene successfully updated.');
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
