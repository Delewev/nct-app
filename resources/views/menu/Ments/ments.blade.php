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
            <div class="text"><p>💫CheerSTUNT FEST MILLENNIUM</p>
                <p>Состоится 15 июля 2023</p></div>
            <div class="blok-btn"><button class="btn4" onclick="document.location='{{route('festall.index')}}'">Участники</button>
            <btn-component></btn-component></div>
        </div>
        <div class="blok">
            <div class="fest">
                <img src="{{asset('img/fest2.png')}}" alt="">
            </div>
            <div class="text">
                <p>💫CheerSTUNT FEST MILLENNIUM</p>
                <p>📅 9 июля 2022г.</p>
                <p>📍<a href="https://yandex.ru/maps/43/kazan/?ll=49.107599%2C55.801987&mode=whatshere&whatshere%5Bpoint%5D=49.109591%2C55.803085&whatshere%5Bzoom%5D=19.88&z=16.63">
                        Кремлевская Набережная, пирс.</a></p></div>
            <div class="blok-btn"><button class="btn4" onclick="document.location=''">Подробно</button> </div>
        </div>
        <div class="blok">
            <div class="fest">
                <img src="{{asset('img/fest.png')}}" alt="">
            </div>
            <div class="text"><p>3 июля 2021г.</p>
                <p>Казань, <a href="https://yandex.ru/maps/43/kazan/?ll=49.145485%2C55.804456&mode=whatshere&whatshere%5Bpoint%5D=49.144455%2C55.804761&whatshere%5Bzoom%5D=17&z=17">
                        Экстрим парк УРАМ💥</a></p>
                <p>Прими участие и получи опыт от лучших спортсменов России по Чир спорту🤸‍♂️</p>
                <p>Добавь в свое лето яркое и запоминающееся событие. ✨ </p></div>
            <div class="blok-btn"><button class="btn4" >Подробно</button></div>
        </div>
    </div>
@endsection
