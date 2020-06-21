<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function update_profil(Request $request){

        $user = User::where('id', \Auth::user()->id)->first();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        if( \Auth::user()->role == 1)
            return redirect()->route('home');
        else
            return redirect()->route('welcome');
    }
}
