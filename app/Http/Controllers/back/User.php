<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Role_user;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class User extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(ModelsUser::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'users' => ModelsUser::all(),
            'roles' => Role::all(),
        ];

        return view('pages.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'roles' => Role::all(),
        ];

        return view('pages.user.create', $data);
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'profile_img' => '',
            'role_id' => 'required'
        ]);

        $store = new ModelsUser;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->password = bcrypt($request->phone);
        if ($request->file('profile_img')) {
            Storage::disk('public')->put('/images/users', $request->file('profile_img'));
            $store->profile_img = $request->file('profile_img')->hashName();

            Image::make(public_path('/images/users') . '/' . $store->profile_img)
                ->fit(128, 128)
                ->save();
        }
        $store->save();
        $store->roles()->attach($request->role_id);

        return redirect('/dashboard/user')->with('success', 'Your user has been created.');
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
            'show' => ModelsUser::find($id),
            'roles' => Role::all(),
        ];

        return view('pages.user.show', $data);
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
            'edit' => ModelsUser::find($id),
            'roles' => Role::all(),
        ];

        return view('pages.user.edit', $data);
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
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'profile_img' => '',
            'role_id' => 'required',
        ]);

        $update = ModelsUser::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->password = bcrypt($request->phone);
        if ($request->file('profile_img')) {
            Storage::disk('public')->put('/images/users', $request->file('profile_img'));
            $update->profile_img = $request->file('profile_img')->hashName();

            Image::make(public_path('/images/users') . '/' . $update->profile_img)
                ->fit(128, 128)
                ->save();
        }
        $update->save();
        $update->roles()->attach($request->role_id);

        return redirect('/dashboard/user')->with('success', 'Your user has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsUser::find($id)->roles()->detach();
        ModelsUser::destroy($id);

        return redirect('/dashboard/user')->with('success', 'Your user has been successfully deleted.');
    }
}
