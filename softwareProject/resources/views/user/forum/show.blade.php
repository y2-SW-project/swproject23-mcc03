@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

<div class="container-lg">

    <div class="flex-row-reverse mt-4">
        {{-- <button type="button" class="col-2 btn btn-orange col-3">Edit</button> --}}

        <form action="{{ route('post.destroy', $forum_post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
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
        