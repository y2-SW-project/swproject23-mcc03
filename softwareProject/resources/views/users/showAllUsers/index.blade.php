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
            <img src="{{ asset('storage/images/' . $user->profile_img) }}" width="100" height="100" class="img-fluid m-0 p-0"/>

            <div class="card-body">
              <p class="fw-bold">{{$user->name}}</p>
              <p class="card-text">{{ $user->description }}</p>
              <button class="btn bg-orange btn-outline-dark">
                <a href="{{ route('users.showAllUsers.show', ['id' => $user]) }}" class="text-dark text-decoration-none fw-semibold">
                  PROFILE</a>
              </button>
            </div>
          </div>
        </div>
        
        @empty
            
        @endforelse
        </div>
    </div>
</div>
        