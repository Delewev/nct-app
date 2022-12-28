@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/my.css')}}">
    <div class="my">
        <div class="my-name">
            <img class="avotar" src="{{asset('img/Icon/icon1.png')}}" alt="">
            <div class="name"><h4>{{$user->name}} {{$user->lastname}} </h4>

            </div>
            <div class="setting">
                <a href="{{route('settings')}}" class="setting-a">Редактировать профиль</a>
            </div>
        </div>
        <div class="my-photo">
            <div class="photo-icon">
                <a href="{{route('settings')}}" class="icon-a">
                    <img class="img-icon" src="{{asset('img/Icon/icon-photo.png')}}" alt="">Фото
                </a>
            </div>
            <div class="photo">
                <img src="{{asset('img/1.jpg')}}" alt="">
            </div>
            <div class="send">
                <div class="send-photo" id="send-photo"><a href="">Загрузить фото</a></div>
                <div class="send-photo"><a href="">Посмотреть все</a></div>
            </div>
        </div>

    </div>
@endsection
