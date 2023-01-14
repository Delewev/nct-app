@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/FA.png')}}" alt="" class="img-1">
            <div><h2>Fenomen A</h2><h4>Екатеринбург</h4></div>
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
                    @if($user->slug == null)
                        <td><a href="{{route('settings')}}">Указать</a></td>
                    @else
                        <td><a href="{{route('you', ['slug'=>$user->slug])}}">{{ $user->slug }}</a></td>
                    @endif
                    <td>{{$user->name}}</td>
                    @if($user->lastname == null)
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td>{{ $user->lastname }}</td>
                    @endif
                    @if($user->city == null)
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td>{{ $user->city }}</td>
                    @endif
                    @if($user->year == null)
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td>{{$user->day}} {{$user->month}} {{$user->year}}г</td>
                    @endif
                    @if($user->phone == null)
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td>{{$user->phone}}</td>
                    @endif
                    @if($user->cheer == null)
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td>{{$user->cheer}}</td>
                    @endif

                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
