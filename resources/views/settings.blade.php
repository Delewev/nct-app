@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href={{asset('css/settings.css')}}>
    <div class="settings" style="">

        <div class="form">
            <div class="form-log">
                <div class="img">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       >
                        <img class="avotar" src="{{asset('img/Icon/icon1.png')}}" alt="">
                    </a>

                </div>
                <div class="name"><h4>{{$user->name}} {{$user->lastname}} </h4></div>

            </div>
                <user-component dataupdate="{{route('dataupdate')}}" :user=@json($user) ></user-component>
        </div>

    </div>


@endsection
