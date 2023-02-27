@extends('layouts.app')

@section('content')
    <div class="container-fluid homepage-bg-1 p-5">
        <div class="container-lg">

            {{-- header --}}
            {{-- <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <p class="fs-1 text-light">Welcome</p>
                </div>
            </div> --}}

            <div class="row justify-content-start pt-5">
                <div class="col-7 text">
                    <p class="fs-1 fw-bold text-light text-uppercase m-0">
                        forums
                    </p>

                    <p class="fs-4 fw-bold text-light text-uppercase">
                        looking for a place to chat and read up on climbing? this is the perfect place!
                    </p>

                    
                    <a class="btn btn-warning col-6 text-uppercase text-light fs-2 fw-bold " href="#" role="button">go to forums</a>
                </div>
            </div>
        </div>
        {{-- container end --}}
    </div>
    {{-- container end --}}

    <hr class="m-1">

    <div class="overlay bg-warning">
    <div class="container-fluid homepage-bg-2 p-5">
        <div class="container-lg">

            <div class="row justify-content-start pt-5">
                <div class="col-7 text">
                    <p class="fs-1 fw-bold text-light text-uppercase m-0">
                        find a climbing partner
                    </p>

                    <p class="fs-4 fw-bold text-light text-uppercase">
                        two heads is better than one! find a climbing partner that matches you!
                    </p>

                    <a class="btn btn-warning col-6 text-uppercase text-light fs-2 fw-bold " href="#" role="button">find a partner</a>
                </div>
            </div>
        </div>
        {{-- container end --}}
    </div>
    {{-- container end --}}
</div>

<hr class="m-1">

    <div class="overlay bg-warning">
    <div class="container-fluid homepage-bg-3 p-5">
        <div class="container-lg">

            <div class="row justify-content-start pt-5">
                <div class="col-7 text">
                    <p class="fs-1 fw-bold text-light text-uppercase m-0">
                        find a coach
                    </p>

                    <p class="fs-4 fw-bold text-light text-uppercase">
                        looking to take your climbing to the next level? there are many coaches to select from! find one that matches your requirements.
                    </p>

                    <a class="btn btn-warning col-6 text-uppercase text-light fs-2 fw-bold " href="#" role="button">find a partner</a>
                </div>
            </div>
        </div>
        {{-- container end --}}
    </div>
    {{-- container end --}}
</div>
@endsection