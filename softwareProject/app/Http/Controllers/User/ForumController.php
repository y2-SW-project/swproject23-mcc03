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

    public function create(){
        
        // gets all categories and user
        $categories = Category::all();
        $user = Auth::user();
        // $users = User::all();

        return view('user.forum.create')->with('categories', $categories)
        ->with('user', $user);
    }

    public function store(Request $request){
        $user = Auth::user();

        // before storing, check these values
        $request->validate([
            'title' => 'required|max:50',
            'body_text' => 'required|max:500',
            'category_id' => 'required',

        ]);

        $forum_post = ForumPost::create([
            'title' => $request->title,
            'body_text' => $request->body_text,
            'category_id' => $request->category_id,
            'user_id' => Auth::id()
        ]);

        return to_route('user.forum.index');
    }

    public function destroy(ForumPost $forum_post)
    {
        // if (auth()->user()->id !== $forum_post->user_id) {
        //     return back()->with(['message' => 'cant delete this post
        //     ']);
        // }
        
        $user = Auth::user();
        $id = Auth::id();
        // $post = ForumPost::where($forum_post == $user);

            // dd($forum_post);
        // $deleteThis = ForumPost::where($forum_post->user_id = $id);
        // ForumPost::where('id', 20)->delete();
        $forum_post->delete();

        // confirmation message will popup when returning to index after successfully deleting article
        return to_route('user.forum.index')->with('success', 'Forum post deleted successfully');
    }
}
