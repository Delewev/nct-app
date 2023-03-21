@extends('auth')

@section('register')
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <div style="display: flex">
        <div class="fon1" style="">
            <div class="fon">
                <div class="conteiner">
                    <div class="">
                        <div class="">
                            <div class="logo">
                                <div class="logo-h"><h1>Вход</h1></div>
                            </div>
                            <div class="">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form">
                                        <label for="email" class="col-md-4">{{ __('E-Mail') }}</label>

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
                                        <label for="password" class="col-md-4">{{ __('Пароль') }}</label>

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
                                            <span class="col-md-4">{{ __('Запомнить') }}</span>
                                        </label>
                                    </div>
                                    <div class="button">
                                        <div class="set">
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
    </div>
@endsection
