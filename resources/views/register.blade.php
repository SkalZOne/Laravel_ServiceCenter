@extends('layouts/auth')

@section('content')
<div class="sixth-block">
    <form class="sixth-block__form" action="{{ route('auth.register') }}" method="POST">
        @csrf
        <h1 class="sixth-block__form__title">Зарегистрируйтесь прямо сейчас</h1>
        <div class="sixth-block__form__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>

        <div class="sixth-block__form__first-two-inputs">
            <div class="sixth-block__form__input-container">
                <input name="fio" class="active-input" type="text" placeholder="ФИО">
                @if ($errors->has('fio'))
                    <small><img src="{{ URL::asset('/image/warning.svg') }}"
                            alt="warning">{{ $errors->first('fio') }}</small>
                @endif
            </div>
            <div class="sixth-block__form__input-container">
                <input name="login" type="text" placeholder="ЛОГИН">
                @if ($errors->has('login'))
                    <small><img src="{{ URL::asset('/image/warning.svg') }}"
                            alt="warning">{{ $errors->first('login') }}</small>
                @endif
            </div>
        </div>
        <div class="sixth-block__form__second-two-inputs">
            <div class="sixth-block__form__input-container">
                <input name="phone" class="active-input" type="text" placeholder="ТЕЛЕФОН">
                @if ($errors->has('phone'))
                    <small><img src="{{ URL::asset('/image/warning.svg') }}"
                            alt="warning">{{ $errors->first('phone') }}</small>
                @endif
            </div>
            <div class="sixth-block__form__input-container">
                <input name="password" type="password" placeholder="ПАРОЛЬ">
                @if ($errors->has('password'))
                    <small><img src="{{ URL::asset('/image/warning.svg') }}"
                            alt="warning">{{ $errors->first('password') }}</small>
                @endif
            </div>
        </div>

        <div class="sixth-block__form__buttons">
            <button class="sixth-block__form__btn-submit btn-out" type="submit">
                <p class="btn-out__text">Зарегистрироваться</p>
            </button>
            <a href="#" class="sixth-block__form__btn-submit btn-out">
                <p class="btn-out__text">Уже есть аккаунт?</p>
            </a>
        </div>
    </form>
</div>
@endsection