<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // user authentication
        // $user = Auth::user();
        // $user->authorizeRoles('user');

        // user must be at least registered to see profile
        if(!Auth::id()){
            return abort(403);
        }

        

        $users = User::all();
        // dd($users);

        return view('user.profile.index')->with('user_skills', $users);
        


        // foreach ($users as $user){
        //     echo $user->name. "<br>";
        // }
    }
}
