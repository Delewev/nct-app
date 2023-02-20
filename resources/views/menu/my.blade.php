@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/my.css')}}">
    <div class="my">
        <div class="my-name">
            <img class="avotar" src="{{asset('img/Icon/icon1.png')}}" alt="">
            <div class="name"><h4>{{$user->name}} {{$user->lastname}} </h4>

            </div>
            <div class="setting">
                <a href="{{route('settings')}}" class="setting-a">Редактировать профиль</a>
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
                    <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        <div class="send-photo" id="send-photo"><a href="{{url('http://127.0.0.1:8000/news/create')}}">Загрузить
                                фото</a></div>
                    </form>

                    <div class="send-photo"><a href="{{route('photo', ['slug'=>$user->slug])}}">Посмотреть все</a></div>
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
                @elseif($user->team == 'NO-LIMIT' )
                    <img src="{{asset('img/team/team-icon/no-limit.jpg.png')}}" alt="">
                @elseif($user->team == 'Grand-Arena' )
                    <img src="{{asset('img/team/team-icon/grand.png')}}" alt="">
                @elseif($user->team == 'Destiny' )
                    <img src="{{asset('img/team/team-icon/destiny.jpg')}}" alt="">
                @elseif($user->team == 'LEGION' )
                    <img src="{{asset('img/team/Legion.png')}}" alt="">

                @elseif($user->team == null )
                    <img src="{{asset('img/cheer.png')}}" alt="">
                @elseif($user->team == 'Другое')
                    <img src="{{asset('img/cheer.png')}}" alt="">
                @endif

            </div>
        </div>
        <div class="upload-component">
            <upload-component></upload-component>
        </div>
    </div>

@endsection
