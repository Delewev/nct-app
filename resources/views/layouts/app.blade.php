<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NCT</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/set.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img class="logo-header" src="{{ asset('img/cheer2.png') }}" alt="" style="width: 55px;">
                    <h6 style="color: #1d49aa; margin-top: 8px; margin-left: 5px"><b>#ВКомандеCheer</b></h6>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="contact">
                                <a class="contact-a" href="https://t.me/vkcheer"><img src="{{asset('img/Icon/Telegram_Messenger.png')}}" alt=""></a>
                                <a class="contact-a" style="margin-right: 20px" href="mailto:vkcheer@mail.ru"><img src="{{asset('img/Icon/Почта_иконка.png')}}" alt=""></a>
                            </div>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('settings') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('settings').submit();">
                                        <img class="img-ico" src="{{asset('img/Icon/header/1_NCTnew.png')}}" alt="">
                                        NCT Аккаунт
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.index') }}"
                                       >
                                        <img class="img-ico" src="{{asset('img/Icon/header/admin.png')}}" alt="" style="width: 35px; height: 35px; margin-right:  2px">Панель администратора
                                    </a>
                                    <a class="dropdown-item" href="{{ route('settings') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('settings').submit();">
                                        <img class="img-ico" src="{{asset('img/Icon/header/setting.png')}}" alt="">
                                        {{ __('Личные данные') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('settings') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('settings').submit();">
                                        <img class="img-ico" src="{{asset('img/Icon/header/Замок.png')}}" alt="">
                                        Безопасность
                                    </a>
                                    <form id="settings" action="{{ route('settings') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img class="img-ico"  src="{{asset('img/Icon/header/exit.png')}}" alt="">
                                        {{ __('Выход') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
