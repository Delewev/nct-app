@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/teams.css')}}">
    <link href="https://fonts.cdnfonts.com/css/cooper-black-cyrillic" rel="stylesheet">
    <div class="table-1">
        <div class="team-icon"><img src="{{asset('img/1_NCTnew.png')}}" alt="" class="img-1">
            <div><h2>NCT</h2><h4>Казань</h4> </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Город</th>
                <th>День рождения</th>
                <th>Average</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="{{route('my')}}">{{$user->nameID}}</a></td>
                <td>{{$user->name}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->day}} {{$user->month}} {{$user->year}}г</td>
                <td>4</td>
                <td>0.1</td>

            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>Gloria</td>
                <td>Reeves</td>
                <td>67439</td>
                <td>10/18/1985</td>
                <td>4</td>
                <td>0.1</td>
                <td>$50</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
