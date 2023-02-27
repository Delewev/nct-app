@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/slug.css')}}">
    <div class="my">
        <div class="my-name">
            <img class="avotar" src="{{asset('img/Icon/icon1.png')}}" alt="">
            <div class="name"><h4>{{$user->name}} {{$user->lastname}} </h4>
                <div class="data"><h7>День рождения: <p>
                        @if($user->day == null)
                            Не указанно
                        @else
                            {{$user->day}} {{$user->month}}
                        @endif
                        </p>
                    </h7></div>
            </div>
            <div class="setting">
            <mess-component :user='@json($user)'></mess-component>
            </div>
        </div>
        <div class="my-photo-t">
            <div class="my-photo">
                <div class="photo-icon">
                    <a href="{{route('settings')}}" class="icon-a">
                        <img class="img-icon" src="{{asset('img/Icon/icon-photo.png')}}" alt="">Фото
                    </a>
                </div>
                <div class="photo">
                    @foreach($user->photos as $photo)
                        <img src="{{ Storage::url('image/news/origin/'.$photo->image) }}" alt="">
                    @endforeach
                </div>
                <div class="send">
                    <div class="send-photo"><a href="{{url('http://127.0.0.1:8000/news')}}">Посмотреть все</a></div>
                </div>
            </div>
            <div class="logo">
                @if($user->team == 'Fenomen-A' )
                    <img src="{{asset('img/team/FA.png')}}" alt="">
                @elseif($user->team == 'NCT' )
                    <img src="{{asset('img/team/1_NCTnew.png')}}" alt="">
                @elseif($user->team == 'G-FAME' )
                    <img src="{{asset('img/team/gfam.png')}}" alt="">
                @elseif($user->team == 'Titans' )
                    <img src="{{asset('img/team/titans.png')}}" alt="">
                @elseif($user->team == 'Zachet' )
                    <img src="{{asset('img/team/zachet.png')}}" alt="">
                @elseif($user->team == 'Husky' )
                    <img src="{{asset('img/team/husky.png')}}" alt="">
                @elseif($user->team == 'Insight' )
                    <img src="{{asset('img/team/insight.png')}}" alt="">
                @elseif($user->team == 'NO-NAME' )
                    <img src="{{asset('img/team/no-name.png')}}" alt="">

                @elseif($user->team == null )
                    <img src="{{asset('img/cheer.png')}}" alt="">
                @endif

            </div>
        </div>
        <div class="upload-component">
            <upload-component></upload-component>
        </div>
    </div>

@endsection
