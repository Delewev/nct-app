@extends('layouts.app')

@section('content')
        @include('components.menu')
        <link rel="stylesheet" href="{{asset('css/photos.css')}}">
<div class="photos">
    <div class="photo">
    @foreach($users->photos as $photo)
        <div>
            <img src="{{ Storage::url('image/news/origin/'.$photo->image) }}" alt="">
        </div>
    @endforeach
    </div>
</div>
@endsection

