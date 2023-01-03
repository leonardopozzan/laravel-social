<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            return redirect('logout');
        }
    }

    public function handleLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data, $request->remember)) {

            $products = Product::all();
            return view('home', compact('products'));
        } else {
            return view('login')->with(array('error' => 1));
        }
    }
}
