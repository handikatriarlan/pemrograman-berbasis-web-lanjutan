<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $data = [
            'pageTitle' => 'Login'
        ];
        return view('auth.login', $data);
    }

    public function loginCheck(Request $r){
        if(Auth::attempt(['username' => $r->username, 'password' => $r->password])){
            $r->session()->regenerate();
            session()->put('user', Auth::user());
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with("error", "Username Atau Password Salah!");
        }
    }

    public function logout(){
        Auth()->logout();
        session()->invalidate();
        session()->regenerate();
    }
}
