@extends('layouts.app')

@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/fest/festall.css')}}">
    <div class="festall">
        <div class="festgrup">
            <div class="center"><h1>Групповой</h1></div>
            <div class="s1">
                <div class="festteam">
                    <p>icon</p>
                    <p>ream</p>
                    <p>город</p>
                    <table class="table">
                        <tbody>
                        <ol>
                            @foreach($users as $user)
                                <li class="lis">
                                    <a href="{{route('you', ['slug'=>$user->slug])}}">
                                    @foreach($user->festsgrup as $fest)
                                        {{$fest->name}} {{$fest->lastname}}
                                    @endforeach</a>
                                </li>
                            @endforeach
                        </ol>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="festgrup">
            <div class="center"><h1>Партнёрка</h1></div>
            <div class="s1">

                <div class="festteam">
                    <p>icon</p>
                    <p>ream</p>
                    <p>город</p>
                    <table class="table">
                        <tbody>
                        <ol>
                            @foreach($users as $user)
                                <li class="lis">
                                    <a href="{{route('you', ['slug'=>$user->slug])}}">
                                        @foreach($user->festspart as $fest)
                                            {{$fest->name}} {{$fest->lastname}}
                                        @endforeach</a>
                                </li>
                            @endforeach
                        </ol>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
