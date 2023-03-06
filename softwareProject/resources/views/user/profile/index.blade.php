@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-lg">

            {{-- header --}}
            <div class="row">
                <div class="col-6">

                    {{Auth::user()->profile_img}}

                      <p>Skillset</p>
                      <td>
                        {{Auth::user()->name}}
                      </td>
                </div>
            </div>
        </div>
    </div>



@endsection