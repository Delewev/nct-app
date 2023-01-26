@extends('layouts.app')

@section('content')

    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/festall.css')}}">
    <div class="contents">
        <div class="grop">
            <h1 class="displayed">Групповые</h1>
        </div>
        <div class="team">
            <div class="bloc">
                <div class="taem-s"><h5>Команда</h5></div>
                <div class="taem-s"><h5>Назавание</h5></div>
                <div class="taem-s"><h5>Город</h5></div>
                <ol>
                        @foreach($fest as $fests)
                            <li class="lis">
                                <a href="{{route('you', ['slug'=>$user->slug])}}">{{$user->slug}}</a>
                                {{$fests->name}} {{$fests->lastname}}
                            </li>
                        @endforeach
                </ol>
            </div>
        </div>

    </div>
@endsection

