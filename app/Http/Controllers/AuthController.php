<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        //return view('v_login');
    }


public function register()
    {
       // return view('v_register');
    }

//public function authenticating(Request $request)
   // {
        //$credentials = $request->validate([
            //'username' => ['required'],
            //'password' => ['required'],
       // ]);

       // if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();
            //return redirect()->intended('dashboard');
        //}
  //  }
}
