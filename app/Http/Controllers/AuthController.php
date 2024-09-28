<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AuthController extends Controller
{
    //
    public function login(){

        //
        return view('auth.login');
    }

    public function auth_login(Request $request){
        //dd(Hash::make(12345));
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ],  $remember)){
            return redirect('pannel/dashboard');

        } else{
            return redirect()->back()->with('error', 'Please enter current email and possword');
        }
    }
}
