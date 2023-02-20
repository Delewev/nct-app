@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/ments.css')}}">
    <link rel="stylesheet" href="{{asset('css/festbtn.css')}}">
    <div class="ments">
        <div class="blok">
            <div class="fest">
                <img src="{{asset('img/fest.png')}}" alt="">
            </div>
            <div class="text">Состоится летом 2023</div>
            <button class="btn4" onclick="document.location='{{route('fest.index')}}'">Участники</button>
            <btn-component></btn-component>
        </div>
        <div class="blok2">
            <div class="fest2">
                <img src="{{asset('img/fest2.png')}}" alt="">
            </div>
            <div class="text">09 август 2022</div>
            <button class="btn4" onclick="document.location=''">Подробно</button>
        </div>
        <div class="blok2">
            <div class="fest">
                <img src="{{asset('img/fest.png')}}" alt="">
            </div>
            <div class="text">Состоится летом 2023</div>
            <button class="btn4" >Подробно</button>
        </div>
    </div>
@endsection
