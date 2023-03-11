<?php

// use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\User\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile');




// Route::resource('/user/profile', UserProfileController::class)->middleware(['auth'])->names('user.profile');