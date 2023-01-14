<div>
        <link rel="stylesheet" href="{{asset('css/bar.css')}}">
        <div class="home">
            <div class="left_holder">
                <div class="menu">
                <ul class="bar">
                    <li class="li"><a href="{{route('slug', ['slug'=>$user->slug])}}" class="a"><img class="img" src="{{asset('img/Icon/icon1.png')}} " alt="">Моя страница</a></li>
                    <li class="li"><a href="{{route('home')}}" class="a"><img class="img" src="{{asset('img/Icon/icon2.png')}}" alt="">Новости</a></li>
                    <li class="li"><a href="{{route('photo', ['slug'=>$user->slug])}}" class="a"><img class="img" src="{{asset('img/Icon/icon3.png')}}" alt="">Фото альбомы</a></li>
                    <li class="li"><a href="" class="a"><img class="img" src="{{asset('img/Icon/icon4.png')}}" alt="">Сообщение</a></li>
                    <li class="li"><a href="" class="a"><img class="img" src="{{asset('img/Icon/icon5.png')}}" alt="">Магазин Cheer</a></li>
                    <li class="li"><a href="{{route('ments')}}" class="a"><img class="img" src="{{asset('img/fest.png')}}" alt="">События</a></li>
                    <li class="li"><a href="{{route('team')}}" class="a"><img class="img-cheer" src="{{asset('img/Icon/cheer.png')}}" alt=""></a></li>
                </ul>
            </div>
            </div>
        </div>
        <script src="{{asset('js/popup.js')}}"></script>
</div>
