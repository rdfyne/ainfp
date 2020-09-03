<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;
use Session;

class AccountController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('account');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [

            'password' => 'nullable|min:8|confirmed',
        ]);

        if (

            DB::table('users')->update([

                'email' => $request->email,
                'password' => $request->filled('password') ? Hash::make($request->password) : Auth::user()->getAuthPassword(),
            ])
        )
            Session::flash('success', 'Acoount has been updated');

        return back();
    }
}
