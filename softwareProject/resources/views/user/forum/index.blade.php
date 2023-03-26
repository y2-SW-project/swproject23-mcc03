@extends('layouts.app')

@section('content')

{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

    <div class="container-lg"> 
        <div class="row">
        <div class="mt-8 col-9">
            {{-- forum posts start --}}
            <div class="bg-orange">
                <header class="fw-bold fs-3 p-2 mb-0 text-dark">BEGINNERS</header>
            </div>

            {{-- first post --}}
            <div class="mt-0 bg-offWhite p-2">
            <div class="row">
                <div class="col-5">
                    <p class="fw-semibold fs-5">Post Title</p>
                </div>

            <div class="row align-items-center justify-content-end col-7">
                <div class="col-3 text-end">
                    <div class="d-inline">
                        <img src="{{asset('storage/profile_pic.jpg')}}" class="img-fluid m-0 p-0" width="50"/>
                    </div>
                </div>

                <div class="col-5 justify-content-end">
                    <div class="d-inline"><p class="fw-semibold fs-5 mb-0">Username</p></div>
                    <div class="d-inline"><p class="fw-light text-muted fs-6 mb-0">Posted 12 hours ago</p></div>
                </div>
            </div>
        </div>
            
                {{-- icons --}}
                <div class="d-inline">99 <i class="fa-solid fa-eye me-2"></i></div>
                <div class="d-inline">99 <i class="fa-solid fa-comment"></i></div>
            </div>

            {{-- post 2 --}}
            <div class="mt-0 bg-offWhite2 p-2">

                
                <div class="row">
                    <div class="col-5">
                            <p class="fw-semibold fs-5">Post Title</p>
                    </div>
    
                <div class="row align-items-center justify-content-end col-7">
                    <div class="col-3 text-end">
                        <div class="d-inline">
                            <img src="{{asset('storage/profile_pic.jpg')}}" class="img-fluid m-0 p-0" width="50"/>
                        </div>
                    </div>
    
                    <div class="col-5 justify-content-end">
                        <div class="d-inline"><p class="fw-semibold fs-5 mb-0">Username</p></div>
                        <div class="d-inline"><p class="fw-light text-muted fs-6 mb-0">Posted 12 hours ago</p></div>
                    </div>
                </div>
            </div>
                
                    {{-- icons --}}
                    <div class="d-inline">99 <i class="fa-solid fa-eye me-2"></i></div>
                    <div class="d-inline">99 <i class="fa-solid fa-comment"></i></div>
                </div>
            
            {{-- post 3 --}}
            <div class="mt-0 bg-offWhite p-2 mb-4">

                <div class="row">
                    <div class="col-5">
                            <p class="fw-semibold fs-5">Post Title</p>
                    </div>
    
                <div class="row align-items-center justify-content-end col-7">
                    <div class="col-3 text-end">
                        <div class="d-inline">
                            <img src="{{asset('storage/profile_pic.jpg')}}" class="img-fluid m-0 p-0" width="50"/>
                        </div>
                    </div>
    
                    <div class="col-5 justify-content-end">
                        <div class="d-inline"><p class="fw-semibold fs-5 mb-0">Username</p></div>
                        <div class="d-inline"><p class="fw-light text-muted fs-6 mb-0">Posted 12 hours ago</p></div>
                    </div>
                </div>
            </div>
                
                    {{-- icons --}}
                    <div class="d-inline">99 <i class="fa-solid fa-eye me-2"></i></div>
                    <div class="d-inline">99 <i class="fa-solid fa-comment"></i></div>
                </div>
            
                
        </div>

        <div class="col-3 mt-8 bg-orange">
            <p>test</p>
        </div>   
    </div>


    @foreach ($forum_posts as $index => $post)
    <div>
        <div class="col-9">
            {{-- alternate background color --}}
            <div class="p-2 bg-{{ $index % 2 == 0 ? 'offWhite' : 'offWhite2' }}">

                <div class="row">
                {{-- display post title --}}
                <p class="fw-semibold fs-5 col-3">{{ $post->title }}</p>
            
            {{-- display user profile image --}}
            <div class="row align-items-center justify-content-end col-5">
                <div class="col-3">
                    <div class="d-inline">
                        <img src="{{asset('storage/profile_pic.jpg')}}" class="img-fluid m-0 p-0" width="50"/>
                    </div>
                </div>

                {{-- display user name and time posted --}}
                <div class="col-5 justify-content-end">
                    <div class="d-inline"><p class="fw-semibold fs-5 mb-0">{{ $post->user_id }}</p></div>
                    <div class="d-inline"><p class="fw-light text-muted fs-6 mb-0">{{ $post->created_at }}</p></div>
                </div>
            </div>
        </div>

            {{-- display icons --}}
            <div class="d-inline">99 <i class="fa-solid fa-eye me-2"></i></div>
            <div class="d-inline">99 <i class="fa-solid fa-comment"></i></div>
                            
        </div>
    </div>

    {{-- row end --}}
@endforeach
</div>
{{-- container end --}}

@endsection
        