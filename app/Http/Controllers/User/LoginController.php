<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('loginform');
    }

    public function handleLogin(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data,$request->remember)) {
            $products = Product::all();
            return view('home', compact('products'));
        }else{
            return view('loginform')->with(array('error' => 1));

        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return view('loginform');
    }
}
