@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/team-icon/favorite.jpg')}}" alt="" class="img-1">
            <div class="table-a"><h2>Фаворит</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%A1%D0%B0%D0%BC%D0%B0%D1%80%D0%B0,+%D0%A1%D0%B0%D0%BC%D0%B0%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB./@53.2609904,49.9178929,10z/data=!3m1!4b1!4m5!3m4!1s0x416618e22bd879d3:0xba95cda9bb3a030b!8m2!3d53.203772!4d50.1606382">
                        Самара</a></h4></div>
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
                    @if($user->slug == null)
                        <td><a href="{{route('settings')}}">Указать</a>></td>
                    @else
                        <td><a href="{{route('you', ['slug'=>$user->slug])}}">{{ $user->slug }}</a></td>
                    @endif
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
