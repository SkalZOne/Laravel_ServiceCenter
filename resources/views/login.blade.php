@extends('layouts/auth')

@section('content')
<div class="auth">
    <form class="auth__form" action="{{ route('auth.login') }}" method="POST">
        @csrf
        <h1 class="auth__form__title">Вход</h1>
        <div class="auth__form__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>

        <div class="auth__form__first-two-inputs">
            <div class="auth__form__input-container">
                <input name="login" type="text" placeholder="ЛОГИН">
                @if ($errors->has('login'))
                    <small><img src="{{ URL::asset('/image/warning.svg') }}"
                            alt="warning">{{ $errors->first('login') }}</small>
                @endif
            </div>
            <div class="auth__form__input-container">
                <input name="password" type="password" placeholder="ПАРОЛЬ">
            </div>
        </div>

        <div class="auth__form__buttons">
            <button class="auth__form__btn-submit btn-out login-btn" type="submit">
                <p class="btn-out__text">Войти</p>
            </button>
            <a href="{{ route('register') }}" class="auth__form__btn-submit btn-out">
                <p class="btn-out__text">Нету аккаунта?</p>
            </a>
        </div>
    </form>
</div>
@endsection