@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/ments.css')}}">
   <div class="ments">
       <div class="nct">
           <a href=""><img src="{{asset('img/1_NCTnew.png')}}" alt=""></a>
       </div>
       <div class="fest">
           <a href=""><img src="{{asset('img/fest.png')}}" alt=""></a>
       </div>

   </div>
@endsection
