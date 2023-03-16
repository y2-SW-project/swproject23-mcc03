<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        // user authentication
        // $user = Auth::user();
        // $user->authorizeRoles('user');

        // user must be at least registered to see profile
        if(!Auth::id()){
            return abort(403);
        }

        $users = User::all();
        // dd($users);

        return view('users.showAllUsers.index')->withUsers($users);

        // $user_profiles = User::all();
        // dd($user_profiles);


        // $user_profiles = User::where('id', Auth::id())->latest('updated_at')->get;
        // dd($user_profiles);

        foreach ($users as $user){
            echo $user->name. "<br>";
        }
    }

    // public function show(User $user)
    // {
    //     if(!Auth::id()) {
    //         return abort(403);
    //       }
        
    //     $user = User::find($user);

    //     dd($user);
    //     // return view('users.showAllUsers.show', ['user' => $user]);
    // }

    public function show(User $id)
    {
        // $user = User::find($id);
        // echo $user;
        return view('users.showAllUsers.show', ['user' => $id]);
    }
}

