<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::all();
        return view('admin.profile.index')->with('profile', $profile[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'Required|Email',
            'password' => 'Required|Confirmed',
            'password_confirmation' => 'Required'
        ]);

        $profile = User::find($id);

        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->password = Hash::make($request->input('password'));
        $profile->save();
        return redirect('admin/profile')->with('success', 'Profile Updated');
    }
}
