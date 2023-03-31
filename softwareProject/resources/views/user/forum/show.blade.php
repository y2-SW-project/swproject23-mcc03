@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

<div class="container-lg">

    <div class="flex-row-reverse mt-4">
        {{-- <button type="button" class="col-2 btn btn-orange col-3">Edit</button> --}}

        {{-- delete --}}
        {{-- {{dd($forum_post->id)}} --}}
        <form action="{{ route('user.forum.destroy', $forum_post)}}" method="post">
        @method('delete')
        @csrf
        
        {{-- confirm message --}}
        <button type="submit" class="btn btn-danger me-4" onclick="return confirm('Are you sure you want to delete this forum post?')">Delete Forum Post</button>
        </form>

    </div>
{{-- {{dd($forum_post)}} --}}
    <div class="display-5"> {{ $forum_post->id}} </div>
    <div class="display-5"> {{ $forum_post->user_id}} </div>

    <div class="card shadow p-2 mt-6">
            <p>Title: {{$forum_post->title}}</p>
            <p>Category: {{$forum_post->category_id}}</p>
            <p>User: {{$forum_post->users->name}}</p>
            <p>Body text: {{$forum_post->body_text}}</p>
        </div>
</div>


@endsection
        