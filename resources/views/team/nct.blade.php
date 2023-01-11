@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/1_NCTnew.png')}}" alt="" class="img-1">
            <div class="table-a"><h2>NCT</h2><h4><a
                        href="https://www.google.com/maps/place/%D0%9A%D0%B0%D0%B7%D0%B0%D0%BD%D1%8C,+%D0%A0%D0%B5%D1%81%D0%BF.+%D0%A2%D0%B0%D1%82%D0%B0%D1%80%D1%81%D1%82%D0%B0%D0%BD/@55.7955015,49.073303,11z/data=!3m1!4b1!4m5!3m4!1s0x415ead2b7caccd99:0x7fcb77b9b5ad8c65!8m2!3d55.7878944!4d49.1233294">
                        Казань</a></h4></div>
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
