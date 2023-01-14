@extends('layouts.app')
@section('content')
    @include('components.menu')
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
    <div class="team">
        <div class="cheer-team"><a href="{{route('cheer')}}"><img src="{{asset('img/cheer.png')}}" alt=""></a></div>
        <div class="team-1">
            <ul class="ul">
                <li class="li-1"><a href="{{route('nct')}}"><img src="{{asset('img/1_NCTnew.png')}}" alt=""
                                                                 class="img-team"></a></li>
                <li class="li-1"><a href="{{route('gfam')}}"><img src="{{asset('img/team/team-icon/gfam.jpg')}}" alt=""
                                                                  class="img-team"></a>
                </li>
                <li class="li-1"><a href="{{route('zachet')}}"><img src="{{asset('img/team/team-icon/zachet.jpg')}}"
                                                                    alt=""
                                                                    class="img-team"></a></li>
                <li class="li-1"><a href="{{route('fa')}}"><img src="{{asset('img/team/team-icon/FA.jpg')}}" alt=""
                                                                class="img-team"></a></li>
                <li class="li-1"><a href="{{route('no-name')}}"><img src="{{asset('img/team/team-icon/no-name.jpg')}}"
                                                                     alt=""
                                                                     class="img-team"></a></li>
                <li class="li-1"><a href="{{route('titans')}}"><img src="{{asset('img/team/team-icon/titans.jpg')}}"
                                                                    alt=""
                                                                    class="img-team"></a></li>
                <li class="li-1"><a href="{{route('grand')}}"><img src="{{asset('img/team/team-icon/grand.png')}}"
                                                                   alt=""
                                                                   class="img-team"></a></li>
                <li class="li-1"><a href="{{route('nolimit')}}"><img src="{{asset('img/team/team-icon/no-limit.jpg')}}"
                                                                     alt=""
                                                                     class="img-team"></a></li>
                <li class="li-1"><a href="{{route('power')}}"><img src="{{asset('img/team/team-icon/power.png')}}"
                                                                   alt=""
                                                                   class="img-team"></a></li>
                <li class="li-1"><a href="{{route('destiny')}}"><img src="{{asset('img/team/team-icon/destiny.jpg')}}"
                                                                     alt=""
                                                                     class="img-team"></a></li>
                <li class="li-1"><a href="{{route('groove')}}"><img src="{{asset('img/team/team-icon/groove.jpg')}}"
                                                                    alt=""
                                                                    class="img-team"></a></li>
                <li class="li-1"><a href="{{route('insight')}}"><img src="{{asset('img/team/team-icon/insight.jpg')}}"
                                                                     alt=""
                                                                     class="img-team"></a></li>
                <li class="li-1"><a href="{{route('favorit')}}"><img src="{{asset('img/team/team-icon/favorite.jpg')}}" alt=""
                                                 class="img-team"></a></li>

                <li class="li-1"><a href="{{route('kodex')}}"><img src="{{asset('img/team/team-icon/kodex.jpg')}}" alt=""
                                                 class="img-team"></a></li>
                <li class="li-1"><a href=""><img src="{{asset('img/team/team-icon/united.jpg')}}" alt=""
                                                 class="img-team"></a></li>
                <li class="li-1"><a href=""><img src="{{asset('img/team/team-icon/husky.jpg')}}" alt=""
                                                 class="img-team"></a></li>
            </ul>
        </div>
    </div>

@endsection
