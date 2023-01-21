@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/team-icon/destiny.jpg')}}" alt="" class="img-1">
            <div class="table-a"><h2>Destiny</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%A2%D0%BE%D0%BB%D1%8C%D1%8F%D1%82%D1%82%D0%B8,+%D0%A1%D0%B0%D0%BC%D0%B0%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB./@53.5220008,49.3462475,11z/data=!3m1!4b1!4m5!3m4!1s0x416878e800ccce15:0xf556927b10d096a!8m2!3d53.508525!4d49.4182196">
                        Тольятти</a></h4></div>
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
