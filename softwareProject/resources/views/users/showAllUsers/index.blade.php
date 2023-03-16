@extends('layouts.app')

@section('content')

<div class="container-fluid ">

    <div class="bg-dark text-center">
        <p class="fs-1 text-light py-5">All Registered Users</p>
    </div>

    <div class="container-lg">
        {{-- card for each user --}}
        <div class="row">
        @forelse ($users as $user)
        <div class="col-4 mb-4">
        
        <div class="card">
            <p>profile image goes here</p>
            {{-- <img src="{{asset('storage/profile_pic.jpg')}}" 
            class="img-responsive img-fluid"/> --}}

            <div class="card-body">
              <p class="fw-bold">{{$user->name}}</p>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{ route('users.showAllUsers.show', ['id' => $user]) }}">{{ $user->name }}</a>
            </div>
          </div>
        </div>
        
        @empty
            
        @endforelse
        </div>
    </div>
</div>
        