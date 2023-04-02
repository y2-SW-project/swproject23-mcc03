@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

<div class="container-lg">

    <div class="justify-content-start d-flex">
        <div class="d-inline-flex mt-4">
            {{-- <button type="button" class="col-2 btn btn-orange col-3">Edit</button> --}}

            <form action="{{ route('post.destroy', $forum_post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger me-2">Delete</button>
            </form>

            <form action="{{ route('user.forum.edit', $forum_post->id) }}">
                <button type="submit" class="btn btn-blue">Edit</button>
            </form>

        </div>
    </div>
    {{-- category tag --}}
    <div class="card bg-orange mt-6 p-2 col-2 mb-n2">
        <p class="mb-0 text-center text-light fw-semibold">{{$forum_post->category->category_name}}</p>
    </div>

    {{-- post content --}}
    <div class="card shadow p-4 mt-0 col-7">
        {{-- user and time --}}
        <p class="fw-light text-muted">Posted by <a href="{{ route('users.showAllUsers.show', $forum_post->user_id) }}"class=" text-muted">
        {{ $forum_post->users->name }}</a> {{ $forum_post->created_at->format('H') }} hours ago</p>
        
        {{-- body text --}}
        <p class="fw-normal fs-16px">{{$forum_post->body_text}}</p>
    </div>
</div>


@endsection
        