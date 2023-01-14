@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/team-icon/no-limit.jpg')}}" alt="" class="img-1">
            <div class="table-a"><h2>No Linit</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3/@59.940414,30.0946716,9z/data=!3m1!4b1!4m5!3m4!1s0x4696378cc74a6f9d:0xfa47ca5a4725c9e4!8m2!3d59.9342596!4d30.3350942">
                        Санкт-Петербург</a></h4></div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Город</th>
                <th>День рождения</th>
                <th>Телефон</th>
                <th>Задача</th>
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
                    @if($user->year == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td>{{$user->day}} {{$user->month}} {{$user->year}}г</td>
                    @endif
                    @if($user->phone == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td>{{$user->phone}}</td>
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
