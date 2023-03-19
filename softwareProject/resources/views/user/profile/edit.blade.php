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
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded bg-dark" style="height: 140px;">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{Auth::user()->name}}</h4>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                      <button class="btn btn-orange" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
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
                  <form 
                  class="form" 
                  {{-- calls update function --}}
                  action="{{route('user.profile.update', $user) }}"
                  method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  
                    <div class="row">
                      <div class="col">

                        {{-- name --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for user name --}}
                            <div 
                            class="form-group" 
                            type="text"
                            name="name"
                            autocomplete=off
                            :value ="@old('name', $user->name)">

                            <label>Name</label>
                            <input class="form-control" type="text" placeholder={{Auth::user()->email}} value={{Auth::user()->name}}></div>

                          </div>
                        </div>

                        {{-- email --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for email --}}
                            <div 
                            class="form-group"
                            type="text"
                            name="email"
                            autocomplete=off
                            :value ="@old('name', $user->email)">

                              <label>Email</label>
                              <input class="form-control" type="text" placeholder={{Auth::user()->email}} value={{Auth::user()->email}}>

                            </div>
                          </div>
                        </div>

                        {{-- description --}}
                        <div class="row">
                          <div class="col mb-3">
                            {{-- edit field for description --}}
                            <div 
                            class="form-group"
                            type="text"
                            name="email"
                            autocomplete=off
                            :value ="@old('name', $user->description)">

                              <label>Description</label>
                              <textarea class="form-control" rows="5" placeholder={{Auth::user()->description}}></textarea>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-2"><b>Edit Skills</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Dropdown</label>
                              <input class="form-control" type="text" placeholder="Skills">
                            </div>
                          </div>
                        </div>
                        <div class="row"> --}}

                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        {{-- save changes --}}
                        <button class="btn btn-orange mt-2" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>

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