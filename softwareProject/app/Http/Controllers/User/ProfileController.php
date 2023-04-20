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

        $users = Auth::user();
        // dd($users);

        return view('user.profile.index')->with('user_skills', $users);
        
        // foreach ($users as $user){
        //     echo $user->name. "<br>";
        // }

        $slab_id = 1;
        $slabRating = UserSkill::where('skill_id', $slab_id);
        dd($slabRating);
    }

    public function show(User $user){
        if(!Auth::id()){
            return abort(403);
        }  
        $user = Auth::user();

        // dd($user);
        return view('user.profile.edit')->with('user', $user);
    }

    public function edit(User $user){
        if(!Auth::id()){
            return abort(403);
        }

        $user = Auth::user();

        // return edit view
        //dd($user);
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

    //     // redirects you back to the index
    //     return to_route('user.profile.edit');
    // }

    // function to update user profile
    public function update(Request $request, User $user)
    {
        if(!Auth::id()){
            return abort(403);
        }

        $user = Auth::user();
        // $skills = UserSkill::class['test']();
        
        // before storing, the values below are checked

        // dd($skills);
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'description' => 'required|max:500',
            'profile_img' => 'file|image'
        ]);

        $profile_img = $request->file('profile_img');
        $extension = $profile_img->getClientOriginalExtension();
        //unique filename
        $filename = $user->id . '_' . $request->name . '.' . $extension;$extension;
        // stores the file in /pubic/images, and names it $filename
        $path = $profile_img->storeAs('public/images', $filename);

        // specified fields that are to update when submitting forum
        $user->update([
            'profile_img' => $filename,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        // after updating the user, it returns to edit view
        return to_route('user.profile.index', $user)->with('success', 'Profile updated successfully');
    }
}
