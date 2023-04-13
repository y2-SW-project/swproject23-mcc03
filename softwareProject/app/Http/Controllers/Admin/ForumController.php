<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\ForumPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ForumController extends Controller
{

    public function index()
    {

        // user must be at least registered to see profile
        if (!Auth::id()) {
            return abort("400");
        }

        $forum_posts = ForumPost::all();
        // $forum_posts = ForumPost::paginate(10);
        $categories = Category::all();
        $user = User::all();

        // authorization check if user has admin role
        if (Gate::allows('view-admin-forum')) {
            return view('admin.forum.index')->with('forum_posts', $forum_posts)
            ->with('categories', $categories)
            ->with('user', $user);
        } else {
            abort(403, 'Unauthorized action.');
        }

    }

    public function show(ForumPost $id)
    {
        // passing the value of id to user
        return view('admin.forum.show', ['forum_post' => $id]);
    }

    public function create(){
        
        // gets all categories and user
        $categories = Category::all();
        $user = Auth::user();
        // $users = User::all();

        // authorization check if user has admin role
        if (Gate::allows('view-admin-create')) {
            return view('admin.forum.create')->with('categories', $categories)
            ->with('user', $user);
        } else {
            abort(403, 'Unauthorized action.');
        }

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

        return to_route('admin.forum.index')->with('success', 'Post created successfully!');
    }

    public function edit($id){
        
        $user = Auth::user();
        $user->authorizeRoles('admin');

        if(!Auth::id()){
            return abort(403);
        }

        // gets forum post, all users and categories
        $forum_post = ForumPost::findOrFail($id);
        $categories = Category::all();
        $users = User::all();

        // return edit view
        // dd($user);
        return view('admin.forum.edit')->with('forum_post', $forum_post)
        ->with('users', $users)
        ->with('categories', $categories);
    }

    public function update(Request $request, $id){

        // retrieve the forum post from the database
        $forum_post = ForumPost::findOrFail($id);
    
        // getting the ID of the authenticated user
        $user_id = auth()->user()->id;

        // checking values before update
        $request->validate([
            'title' => 'required|max:50',
            'body_text' => 'required|max:500',
            'category_id' => 'required'
        ]);
        
        // specified fields that are to update when submitting forum
        $forum_post->update([
            'title' => $request->title,
            'body_text' => $request->body_text,
            'category_id' => $request->category_id,
        ]);
    
        // dd($forum_post);
    
        // after updating the post, it returns to the original view of the post
        return redirect()->route('admin.forum.index')->with('success', 'Post updated successfully');
}

    public function destroy($id)
    {

    $forum_post = ForumPost::findOrFail($id);
    
    // Check if the authenticated user is the owner of the post
    // if ($forum_post->user_id !== auth()->id()) {
    //     return redirect()->route('admin.forum.index')->with('error', 'You are not authorized to delete this post');
    // }

    $forum_post->delete();
    // success message and redirect
    return redirect()->route('admin.forum.index')->with('success', 'Post deleted successfully');

    }
}

