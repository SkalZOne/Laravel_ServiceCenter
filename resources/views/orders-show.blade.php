@extends('layouts/auth')

@section('content')
<div class="orders-show">
    <form class="orders-show__form" action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        <h1 class="orders-show__form__title">Редактирование заявки</h1>

        <div class="orders-show__form__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>

        <div class="orders-show__form__first-two-inputs">
            <div class="orders-show__form__input-container">
                <input name="car" value="{{ $order->car }}" class="active-input" type="text" placeholder="АВТО">
            </div>
            <div class="orders-show__form__select-container">
                <div class="orders-show__form__select-container__select">
                    <p>День</p>
                    <select name="day" id="daySelect">
                        <option value="{{ $day }}" selected>{{ $day }}</option>
                    </select>
                </div>

                <div class="orders-show__form__select-container__select">
                    <p>Месяц</p>
                    <select name="month" id="monthSelect">
                        <option value="{{ $month }}" selected>{{ $month }}</option>
                    </select>
                </div>

                <div class="orders-show__form__select-container__select">
                    <p>Год</p>
                    <select name="year" id="yearSelect">
                        <option value="{{ $year }}" selected>{{ $year }}</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="orders-show__form__textarea">
            <textarea name="description" id="textarea" placeholder="ОПИСАНИЕ ПРОБЛЕМЫ"
                class="orders-show__form__textarea__input" maxlength="4000">{{ $order->description }}</textarea>
            <p class="orders-show__form__textarea__counter"><span class="orders-show__form__textarea__counter__count"
                    id="textareaCounter">0</span>/4000</p>
        </div>

        <div class="orders-show__form__second-two-inputs">
            <div class="orders-show__form__select-container">
                <div class="orders-show__form__select-container__select">
                    <p>Время бронирования</p>
                    <select name="time" id="timeSelect">
                        <option value="{{ $order->time }}" selected>{{ $order->time }}</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="orders-show__form__btn-back btn-out">
                <p class="orders-show__form__btn-back__text btn-out__text"><a href="{{ route('orders') }}">Вернуться</a></p>
            </button>

            <button type="submit" class="orders-show__form__btn-submit btn-out">
                <p class="btn-out__text">Забронировать</p>
            </button>
            
        </div>
    </form>
</div>
@vite('resources/js/orders.js')
@endsection