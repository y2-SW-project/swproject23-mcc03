@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="container-lg mb-8">
        <div class="row">
            <div class="col-3">
                <p class="fs-2 mt-5 mb-0">
                    {{-- displaying users name --}}
      
                  {{ $user->name }}
    
                    {{-- user profile picture --}}
                    <img src="{{asset('storage/profile_pic.jpg')}}" class="img-responsive img-fluid"/>
        
                    <div class="col-6">
                      <p class="fs-2 mt-5 mb-0">
                        hi
                      </p>

                      {{-- @foreach ($user_skills->skills as $skill)
                            
                            <p class="fw-semibold fs-4 mb-0 text-capitalize text-muted">{{$skill->description}}</p>
                           
                                
                            @for ($x = 0; $x < $skill->pivot->rating; $x++) 
                            <i class="fa-solid fa-circle mb-3"></i>
                         
                            @endfor  
                            @endforeach --}}

                      </div>
        {{-- contact user button/next user --}}
        <div class="col-9 mt-8">
            <button type="button" class="btn btn-orange btn-outline-orangeStroke btn-lg col-9 text-light">Contact {{$user->name}}</button>

                <button type="button" class="btn btn-orange btn-outline-orangeStroke text-light btn-lg col-2">Next User</button>

                <p class="col-9 mt-2 fw-light fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt velit, qui maxime doloribus laudantium explicabo! Sit dolorem aut ex natus eveniet, autem vero officiis itaque rem accusantium ducimus quae dolorum voluptatum ratione quaerat corrupti? Rem quo error vitae harum esse molestiae velit. Laudantium accusantium reiciendis hic Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt velit, qui maxime doloribus laudantium explicabo! Sit dolorem aut ex natus eveniet, autem vero officiis itaque rem accusantium ducimus quae dolorum voluptatum ratione quaerat corrupti? Rem quo error vitae harum esse molestiae velit. Laudantium accusantium reiciendis hic </p>
        </div>
    </div>
</div>
</div>

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