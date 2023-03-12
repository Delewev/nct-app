@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
    <div class="tables">
        <h4><b>Пользаватели</b></h4>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">ИФ</th>
                <th scope="col">Почта</th>
                <th scope="col">телефон</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Город</th>
                <th scope="col">Команда</th>
                <th scope="col">Cheer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td><a href="{{route('you', ['slug'=>$user->slug])}}">{{ $user->slug }}</a></td>
                    <td>{{$user->name}} {{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->phone == null)
                        <td style="color: darkred;"><b>Не указанно</b></td>
                    @else
                        <td>{{$user->phone}}</td>
                        @endif
                        </td>
                        <td>@if($user->year == null)
                            <td style="color: darkred;"><b>Не указанно</b></td>
                        @else
                            <td>{{$user->day}} {{$user->month}} {{$user->year}}</td>
                            @endif
                            </td>
                            <td>@if($user->city == null)
                                <td style="color: darkred;"><b>Не указанно</b></td>
                            @else
                                <td>{{$user->city}}</td>
                                @endif
                                </td>
                                <td>@if($user->team == null)
                                    <td style="color: darkred;"><b>Не указанно</b></td>
                                @else
                                    <td>{{$user->team}}</td>
                                    @endif
                                    </td>
                                    <td>@if($user->cheer == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->cheer}}</td>
                                        @endif
                                        </td>


                </tr>
            @endforeach
        </table>
    </div>
@endsection
