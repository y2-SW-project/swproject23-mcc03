@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

<div class="container-lg">

    <div class="justify-content-start d-flex">
        <div class="d-inline-flex mt-4">
            {{-- <button type="button" class="col-2 btn btn-orange col-3">Edit</button> --}}

            <form action="{{ route('user.post.destroy', $forum_post->id) }}" method="POST">
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

{{-- footer --}}
<div class="container-fluid bg-dark mt-8">
    <div class="container-lg">
        <footer class="py-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light">Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light">Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light">Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
      
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5 class="text-light">Subscribe to our newsletter</h5>
                <p class="text-muted">Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-orange text-light" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p class="text-muted">&copy; 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>

@endsection
        