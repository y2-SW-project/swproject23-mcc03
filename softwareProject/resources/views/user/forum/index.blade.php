@extends('layouts.app')

@section('content')



{{-- fontawesome icons --}}
<script src="https://kit.fontawesome.com/45886d57e3.js" crossorigin="anonymous"></script>

{{-- bg image --}}
<div class="container-fluid p-7 homepage-bg-3"></div>

<div class="container-fluid p-4 bg-dark">
    <div class="row justify-content-center">
    <p class="fs-32px text-light text-center fw-bold col-8 mb-0">FORUMS</p>
    
{{-- create post btn --}}
<div class="col-1 mb-0 align-items-center">
    <a href="/user/forum/create" class="text-decoration-none">
        <button class="bg-orange btn">
            <div class="row align-items-center">
                <div class="col-1 ms-0">
                    <i class="fa-solid fa-circle-plus"></i>
                </div>
                <div class="col">
                    <p class="text-light fw-semibold text-decoration-none fs-16px m-0">Create Post</p>
                </div>
            </div>
        </button>
    </a>
</div>


{{-- home--}}
<div class="col-1 mb-0 align-items-center">
    <a href="/" class="text-decoration-none">
        <button class="bg-orange btn">
            <div class="row align-items-center">
                <div class="col-1 ms-0">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="col">
                    <p class="text-light fw-semibold text-decoration-none fs-16px m-0">Home</p>
                </div>
            </div>
        </button>
    </a>
</div>


{{-- profile --}}
<div class="col-1 mb-0 align-items-center">
    <a href="/user/profile" class="text-decoration-none">
        <button class="bg-orange btn">
            <div class="row align-items-center">
                <div class="col-1 ms-0">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="col">
                    <p class="text-light fw-semibold text-decoration-none fs-16px m-0">Profile</p>
                </div>
            </div>
        </button>
    </a>
</div>
    


</div>
</div>

    <div class="container-lg"> 

        @if(session('error'))
    <div class="alert alert-danger mt-4">{{ session('error') }}</div>
    @endif

    @if(session('success'))
    <div class="alert alert-success mt-4">{{ session('success') }}</div>
    @endif
    
        <div class="row">
            <div class="mt-6 col-9">
                {{-- forum posts start --}}
                <div class="bg-orange">
                    <header class="fw-bold fs-3 p-2 mb-0 text-dark">
                    BEGINNERS</header> 
                </div> 
            </div> 
        </div>

    @foreach ($forum_posts as $index => $post)
    <div>
        <div class="col-9">
            {{-- alternate background color --}}
            <div class="p-2 bg-{{ $index % 2 == 0 ? 'offWhite' : 'offWhite2' }}">

                <div class="row">
                {{-- display post title --}}
                <a href="{{ route('user.forum.show', ['id' => $post]) }}" class="text-dark text-decoration-none">
                <p class="fw-semibold fs-5 col-3">{{ $post->title }}</a></p>
            
            {{-- display user profile image --}}
            <div class="row align-items-center justify-content-end col-5">
                <div class="col-3">
                    <div class="d-inline">
                        <img src="{{asset('storage/profile_pic.jpg')}}" class="img-fluid m-0 p-0" width="50"/>
                    </div>
                </div>

                {{-- display user name and time posted --}}
                <div class="col-6 justify-content-end">
                    <div class="d-inline"><p class="fw-semibold fs-5 mb-0">     
                        {{ $post->users->name}}</p>
                    </div>
                        
                    <div class="d-inline"><p class="text-muted">{{ $post->created_at->format('H') }} hours ago</p></div>
                </div>
            </div>
        </div>

            {{-- display icons --}}
            <div class="d-inline">99 <i class="fa-solid fa-eye me-2"></i></div>
            <div class="d-inline">99 <i class="fa-solid fa-comment"></i></div>
                            
        </div>
    </div>
</div>
@endforeach

<div class="mt-8"></div>


{{-- these are the links for the pagination --}}
{{-- {{$forum_posts->links()}} --}}
    

</div>
{{-- container end --}}

{{-- footer --}}
<div class="container-fluid bg-dark">
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
        