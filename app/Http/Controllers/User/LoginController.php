<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(!Auth::check()) {
            return view('login');
        }else{
            return redirect('logout');
        }
    }

    public function handleLogin(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data,$request->remember)) {
            return view('home');
        }else{
            return view('login')->with(array('error' => 1));
        }
    }
}
