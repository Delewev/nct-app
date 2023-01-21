@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/insight.png')}}" alt="" class="img-1">
            <div class="table-a"><h2>Insight</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/@55.5815244,36.8251014,9z/data=!3m1!4b1!4m5!3m4!1s0x46b54afc73d4b0c9:0x3d44d6cc5757cf4c!8m2!3d55.755826!4d37.6172999">
                        Москва</a></h4></div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Город</th>
                <th>Позиция</th>
            </tr>
            </thead>
            @foreach($users as $user)
                <tbody>
                <tr>
                    <td><a href="{{route('you', ['slug'=>$user->slug])}}">{{ $user->slug }}</a></td>
                    <td>{{$user->name}}</td>
                    @if($user->lastname == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td>{{ $user->lastname }}</td>
                    @endif
                    @if($user->city == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td>{{ $user->city }}</td>
                    @endif
                    @if($user->cheer == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td>{{$user->cheer}}</td>
                    @endif
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
