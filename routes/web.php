<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ProductController;
use App\Http\Controllers\User\LoginController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::resource('products', ProductController::class);

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Route::post('/login', 'LoginController@handleLogin');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('auth');


// Route::get('/login', 'User/LoginController@login')->name('login');

Route::get('/login', [LoginController::class, 'login'])->name('login');


Route::get('/logout', function () {
    Session::flush();
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/team', [PageController::class, 'teampage'])->name('team');