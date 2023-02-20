@extends('layouts.app')

@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/photos.css')}}">
    <div class="photos">
        <div class="photo">
            @foreach($user->photos as $photo)
                <div>
                    <img src="{{ Storage::url('image/news/origin/'.$photo->image) }}" alt="">
                    <span>{{$photo->created_at->format('d F, Y год.')}}</span>
                </div>
            @endforeach
        </div>
    </div>

    <post-component></post-component>
@endsection

