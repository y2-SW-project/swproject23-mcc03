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
        if (!Auth::id()) {
            return abort(403);
        }


        // $forum_posts = ForumPost::with('users')
        // ->with('category')
        // ->get();

        $forum_posts = ForumPost::all();
        $categories = Category::all();
        $users = User::all();

        // foreach ($forum_posts as $post){
        //     $users = User::all('id' == $post->user_id);
        // }

        // $posts = ForumPost::find(1);
        // $userName = $posts->users->name;
        // dd($userName);

        // dd($forum_posts);
        return view('user.forum.index')->with('forum_posts', $forum_posts)
            ->with('categories', $categories)
            ->with('users', $users);


        // foreach ($users as $user) {
        //     echo $user->id;
        // }
    }

    public function show(ForumPost $id)
    {
        // $user = User::find($id);
        // echo $user;

        // passing the value of id to user
        return view('user.forum.show', ['forum_post' => $id]);
    }
}
