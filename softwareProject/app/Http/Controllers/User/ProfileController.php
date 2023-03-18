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

    public function show(){
        // 
    }

    public function edit(User $user){
        if(!Auth::id()){
            return abort(403);
        }

        $user = User::all();
        // $names = $users->pluck('name');

        // dd($names);

        // return edit view
        return view('user.profile.edit')->with('user', $user);

    }

    // public function store(Request $request)
    // {
    //     if(!Auth::id()){
    //         return abort(403);
    //     }
    //     // before storing, the values below are checked
    //     $request->validate([
    //         'name' => 'required|max:50',
    //         'email' => 'required',
    //         'description' => 'required|max:500',
    //         // 'profile_img' => 'file|image',
    //     ]);

    //     // saves data input from forum to db
    //     $user = User::create([
    //         // 'id' => Auth::id(),
    //         // 'profile_img' => $filename,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'description' => $request->description,
    //         // 'updated_at' => now()
    //     ]);

    //     // when you create the article, it redirects you back to the index. There you will see the newly made article
    //     return to_route('user.profile.edit');
    // }

    // function to update user profile
    public function update(Request $request, User $user)
    {
        if(!Auth::id()){
            return abort(403);
        }
        
        // before storing, the values below are checked
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'description' => 'required|max:500'
            // 'profile_img' => 'file|image'
        ]);

        
        // specified fields that are to update when submitting forum
        $user->update([
            // 'profile_img' => $filename,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        // after updating the user, it returns to edit view
        return to_route('user.profile.edit', $user)->with('success', 'Profile updated successfully');
    }
}
