@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <div class="fon1" style="background-image: url(img/fon-login.jpg);">
        <div class="fon">
            <div class="conteiner">
                <div class="">
                    <div class="">
                        <div class="logo">
                            <img class="logo-img" src="{{ asset('img/cheer.png') }}" alt="">
                            <div class="logo-h"><h4>{{__('Авторизация')}}</h4></div>
                        </div>
                        <div class="">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form">
                                    <label for="email" class="Email">{{ __('E-Mail') }}</label>

                                    <div class="">
                                        <input id="email" type="email"
                                               class=" form-input @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form">
                                    <label for="password" class="">{{ __('Пароль') }}</label>

                                    <div class="">
                                        <input id="password" type="password"
                                               class=" form-input @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label for="remember">
                                        <input type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Запомнить') }}</span>
                                    </label>
                                </div>
                                <div class="button">
                                    <div class="">
                                        <button type="submit" class="btn">
                                            {{ __('Войти') }}
                                        </button>
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a class="" href="{{ route('password.request') }}">
                                                    {{ __('Забыли пароль?') }}
                                                </a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
