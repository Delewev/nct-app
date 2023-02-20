@extends('layouts.app')

@section('content')

    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <div class="contents">
        <div class="post">
{{--            @foreach($festCategories as $festCategory)--}}
{{--                @foreach ($festCategory as $fests)--}}
{{--                    @foreach($fests->user as $user)--}}
{{--                        <div>--}}
{{--                            {{$fests->user_id}}. {{$fests->name}} {{$fests->lastname}} @dump($user)--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endforeach--}}
{{--            @endforeach--}}
        </div>
    </div>
@endsection

