<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\ForumPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
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

        
        // this is causing an error because it is trying to find a table 
        // called forum_posts_user, which does not exist
        $forum_posts = ForumPost::with('users')
        ->with('categories')
        ->get();

        return view('user.forum.index')->with('forum_posts', $forum_posts);
        
        // foreach ($users as $user){
        //     echo $user->name. "<br>";
        // }
    }
}
