@extends('layouts/auth')

@section('content')
<div class="auth">
    <form class="auth__form" action="{{ route('auth.logout') }}" method="POST">
        @csrf
        <h1 class="auth__form__title">Добро пожаловать {{ auth()->user()->login }} </h1>
        <div class="auth__form__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>
        <div class="auth__form__buttons">
            <button class="auth__form__btn-submit btn-out login-btn" type="submit">
                <p class="btn-out__text">Выйти</p>
            </button>
        </div>
    </form>
</div>
@endsection