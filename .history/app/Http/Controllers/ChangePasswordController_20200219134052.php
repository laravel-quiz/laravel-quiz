<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth\passwords\chanagepassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $user = User::findOrfail($userId);
        //dd($user);
        $request->validate([
            'oldpassword' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8','different:oldpassword','unique:App\User'],
        ]);
        if (password_verify($request->oldpassword,$user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('home');
        }
        else {
            return 'Old password not matched!!';
        }

    }
}
