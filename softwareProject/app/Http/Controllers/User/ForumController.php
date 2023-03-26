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

        // user must be at least registered to see profile
        if(!Auth::id()){
            return abort(403);
        }

        $user = Auth::user();

        $forum_posts = ForumPost::with('users')
        ->with('category')
        ->get();

        

        $user = User::find($user);
        // $forum_posts = $user->forumPosts;

        // dd($forum_posts);
        return view('user.forum.index')->with('forum_posts', $forum_posts);
        
        // foreach ($users as $user){
        //     echo $user->name. "<br>";
        // }
    }
}
