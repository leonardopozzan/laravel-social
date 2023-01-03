<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home(){
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function profile(){
        return view('profile');
    }
}
