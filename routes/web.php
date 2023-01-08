<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\ProductController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\UserController;

use Illuminate\Support\Facades\Route;

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
Route::resource('users', UserController::class);

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/loginform', [LoginController::class, 'showLogin'])->name('loginform');

Route::post('/loginform', [LoginController::class, 'handleLogin'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/team', [PageController::class, 'teampage'])->name('team');