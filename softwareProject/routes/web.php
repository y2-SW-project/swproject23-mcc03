<?php

// use App\Http\Controllers\User\ProfileController as UserProfileController;

use App\Http\Controllers\ForumController as ControllersForumController;
use App\Http\Controllers\ProfileController as ControllersProfileController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ForumController as UserForumController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\ForumController as AdminForumController;
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

// gets welcome page route for admin
Route::get('/user/welcome', [App\Http\Controllers\HomeController::class, 'userHome'])->name('user.welcome');

// gets welcome page route for admin
Route::get('/admin/welcome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.welcome');

// admin forum route creation
Route::resource('/admin/forum', AdminForumController::class)->middleware(['auth'])->names('admin.forum');

// creates all routes for user profile
Route::resource('/user/profile', ProfileController::class)->middleware(['auth'])->names('user.profile');

// creates all routes for user forum
Route::resource('/user/forum', UserForumController::class)->middleware(['auth'])->names('user.forum');


// creates all routes for showing all users
Route::resource('/users/showAllUsers', UsersController::class)->middleware(['auth']);

// creates routes for viewing posts
Route::get('/users/forum/show/{id}', [UserForumController::class, 'show'])->name('user.forum.show');

// creates delete route
Route::delete('/user/forum/show/{id}', [UserForumController::class, 'destroy'])->name('user.post.destroy');

// creates route for viewing user profiles
Route::get('/users/showAllUsers/show/{id}', [UsersController::class, 'show'])->name('users.showAllUsers.show');


// admin routes for viewing posts
Route::get('/admin/forum/show/{id}', [AdminForumController::class, 'show'])->name('admin.forum.show');

// admin delete route
Route::delete('/admin/forum/show/{id}', [AdminForumController::class, 'destroy'])->name('admin.post.destroy');