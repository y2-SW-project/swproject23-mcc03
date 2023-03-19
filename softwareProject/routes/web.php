<?php

// use App\Http\Controllers\User\ProfileController as UserProfileController;

use App\Http\Controllers\ProfileController as ControllersProfileController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UsersController;
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


// Route::put('/user/profile/edit', [ProfileController::class, 'update'])->name('user.profile.edit');

// // creates route for user profile edit page. if this is not defined before, it goes to the show function
// Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->name('user.profile.edit');

// creates all routes for user profile
Route::resource('/user/profile', ProfileController::class)->middleware(['auth'])->names('user.profile');


// Route::get('/users/showAllUsers', [UsersController::class, 'index'])->name('users.showAllUsers');

// creates all routes for showing all users
Route::resource('/users/showAllUsers', UsersController::class)->middleware(['auth']);

// creates route for showing an individual user profile
// Route::get('/users/ShowAllUsers/show', [UsersController::class, 'show'])->name('users.showAllUsers.show');

// creates route for viewing user profiles
Route::get('/users/showAllUsers/show/{id}', [UsersController::class, 'show'])->name('users.showAllUsers.show');