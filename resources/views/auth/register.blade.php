@extends('layouts.nct')

@section('content')
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/app2.css')}}>
    <div class="col-md-6  mx-auto rounded">
        <div class="conteiner-register ">
        <div class="form">
            <div class="logo">
                <img class="logo-img" alt="">
                <div class="logo-h"><h1>{{__('Регистрация')}}</h1></div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control   @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-right">{{ __('Подтвердить пароль') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="register">
                            <button type="submit" class="btn-register ">
                                {{ __('Зарегистрироваться') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>

    </div>

@endsection
