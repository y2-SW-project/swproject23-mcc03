@extends('layouts.app')

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mt-4">
<div class="row flex-lg-nowrap">

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  {{-- user profile picture --}}
                  <div class="mx-auto">
                    <div class="d-flex justify-content-center align-items-center rounded bg-dark">
                      <img src="{{ asset('storage/images/' . Auth::user()->profile_img) }}" width="140" height="140" alt="User Profile Image"></span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{Auth::user()->name}}</h4>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                    </div>
                  </div>
                  <div class="text-end text-sm-right">
                    <span class="badge text-dark">Climber</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  {{-- form start --}}
                  <form 
                  class="form" 
                  {{-- calls update function --}}
                  action="{{route('user.profile.update', ['user', $user]) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <label>Profile Picture</label>
                  <div><input type="file" name="profile_img"></div>

                    <div class="row">
                      <div class="col">
                        {{-- name --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for user name --}}
                            <div class="form-group">

                            <label>Username</label>
                              <input                         
                              type="text"
                              name="name"
                              autocomplete=off
                              :value ="@old('name', $user->name)"class="form-control" type="text" 
                              placeholder={{Auth::user()->email}} 
                              value={{Auth::user()->name}}>
                            </div>
                          </div>
                        </div>

                        {{-- email --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for email --}}
                            <div class="form-group">

                              <label>Email</label>
                              <input                             
                              type="text"
                              name="email"
                              autocomplete=off
                              :value ="@old('name', $user->email)" class="form-control" type="text" 
                              placeholder={{Auth::user()->email}} 
                              value={{Auth::user()->email}}>

                            </div>
                          </div>
                        </div>

                        {{-- description --}}
                        <div class="row">
                          <div class="col mb-3">
                            {{-- edit field for description --}}
                            <div class="form-group">

                              <label>Description</label>
                              <textarea                             
                              type="text"
                              name="description"
                              autocomplete=off
                              :value ="@old('name', $user->description)" class="form-control" rows="5" 
                              placeholder={{Auth::user()->description}}
                              value={{Auth::user()->email}}></textarea>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-2"><b>Edit Skill Ratings</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">

                              @foreach (Auth::user()->skills as $skill)
                                <label class="text-capitalize me-6">{{$skill->description}}</label>

                                <select name={{$skill->description}}>
                                {{-- select ratings from 1 to 5 --}}
                                @for ($x = 1; $x <= 5; $x++){
                                  <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                }
                                @endfor
                              
                            </select> <br>
                              @endforeach
                            </div>
                          </div>
                        </div>
                        <div class="row">

                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        {{-- save changes --}}
                        <button class="btn btn-orange mt-2" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>
                  {{-- form end --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>

@endsection