@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/team/team-icon/gfam.jpg')}}" alt="" class="img-1">
            <div class="table-a"><h2>G-FAM</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%A7%D0%B5%D0%B1%D0%BE%D0%BA%D1%81%D0%B0%D1%80%D1%8B,+%D0%A7%D1%83%D0%B2%D0%B0%D1%88%D1%81%D0%BA%D0%B0%D1%8F+%D0%A0%D0%B5%D1%81%D0%BF./data=!4m2!3m1!1s0x415a37f37d16e915:0x7174067761ec11d9?sa=X&ved=2ahUKEwj_1ov8lLP8AhXtxIsKHctYBVcQ8gF6BQiGARAB">
                        Чебоксары</a></h4></div>
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
                        <td><a href="{{route('settings')}}">Указать<a></td>
                    @else
                        <td><a href="{{route('my')}}">{{ $user->slug }}</a></td>
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
