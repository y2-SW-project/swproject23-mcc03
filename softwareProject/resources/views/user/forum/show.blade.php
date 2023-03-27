@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

<div class="container-lg">

    <button type="button" class="btn btn-primary justify-content-end col-3">Primary</button>

    <div class="card shadow p-2 mt-6">
            <p>Title: {{$forum_post->title}}</p>
            <p>Category: {{$forum_post->category_id}}</p>
            <p>User: {{$forum_post->users->name}}</p>
            <p>Body text: {{$forum_post->body_text}}</p>
        </div>
</div>


@endsection
        