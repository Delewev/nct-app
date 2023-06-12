@extends('layouts.nct')
@section('content')
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-light">
                    <div class="bradcam_text">
                        <h3>{{$user->name}} {{$user->lastname}} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="settings" style="">
        <div class="form">
                <user-component dataupdate="{{route('dataupdate')}}" :user=@json($user) ></user-component>
        </div>
    </div>

@endsection
