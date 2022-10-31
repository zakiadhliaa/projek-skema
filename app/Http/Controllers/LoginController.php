<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.v_login');
    }
    
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }

    public function register(){
        return view('Login.v_register');
    }

    public function simpanregister(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'User',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('Login.v_login');
    }
}
