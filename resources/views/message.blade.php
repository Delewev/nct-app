@extends('layouts.app')

@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/message.css')}}">
    <div class="message">
        <div class="header">
            <div class="header-search">
                <form>
                    <input type="text" placeholder="Искать здесь...">
                </form>
            </div>
            <div class="header-user">

            </div>
        </div>
        <div class="content">
            <div class="content-user"></div>
            <div class="content-chat" style="background-image: url(img/chat.jpg);"></div>
        </div>
    </div>
@endsection

