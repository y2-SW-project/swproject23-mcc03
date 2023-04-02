@extends('layouts.app')

@section('content')

{{-- {{dd($forum_post)}} --}}

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mt-4">
<div class="row flex-lg-nowrap">

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  {{-- form start --}}
                  <form 
                  class="form" 
                  {{-- calls update function --}}
                  action="{{route('user.forum.update', $forum_post->id) }}" method="post" enctype="multipart/form-data"> 
                  @method('put')
                  @csrf
                    <div class="row">
                      <div class="col">

                        {{-- title --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for title --}}
                            <div class="form-group">
                            <label>Title</label>
                            <input type="text" 
                            name="title" 
                            autocomplete="off" 
                            class="form-control" 
                            value="{{$forum_post->title}}">
                            </div>
                          </div>
                        </div>

                        {{-- body text --}}
                        <div class="row">
                          <div class="col">
                            {{-- edit field for body text --}}
                            <div class="form-group">

                            <label>Body text</label>
                                <textarea                             
                                name="body_text"
                                autocomplete=off
                                class="form-control" 
                                rows="5" 
                                type="text"
                                >{{ $forum_post->body_text }}</textarea>
                            </div>
                          </div>
                        </div>

                    {{-- select category --}}
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="mb-2"><b>Select a category</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                                
                                <label for="category">Category</label>
                                <select name="category_id">
                                  @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                      {{$category->category_name}}
                                    </option>
                                  @endforeach
                             </select>

                            </div>
                          </div>
                        </div>
                        <div class="row">

                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        {{-- save changes --}}
                        <a href="{{ route('user.forum.index') }}" class="btn btn-danger mt-2 me-2">Cancel</a>
                        <button class="btn btn-success mt-2" type="submit">Save</button>
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