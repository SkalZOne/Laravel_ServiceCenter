@extends('layouts/auth')

@section('content')
<div class="orders">
    <h1 class="orders__table__title">Ваши заявки</h1>
    <table class="orders__table">
        <thead>
            <tr>
                <th>#</th>
                <th>Авто</th>
                <th>Описанная проблема</th>
                <th>Дата бронирования</th>
                <th>Время бронирования</th>
                <th>Статус заявки</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th>
                        {{ $loop->index }}
                        <a class="orders__table__redact-link" href="{{ route('orders.show', $order->id) }}"><img class="orders__table__redact-link__img"
                                src="{{ URL::asset('/image/pencil-redact.svg') }}" alt="orderRedact"></a>
                    </th>
                    <th>{{ $order->car }}</th>
                    <th id="tableDescription" class="description">
                        <div class="description__container">
                            <span class="description__container__text text-hidden">{{ $order->description }}</span>
                            <img id="arrowDown" class="description__container__arrow-down"
                                src="{{ URL::asset('/image/arrow-down.svg') }}" alt="arrowDown" style="display: none">
                        </div>
                    </th>
                    <th>{{ $order->date }}</th>
                    <th>{{ $order->time }}</th>

                    @if ($order->status == 1)
                        <th class="open">Открыта</th>
                    @elseif ($order->status == 2)
                        <th class="closed">Закрыта</th>
                    @elseif ($order->status == 3)
                        <th class="canceled">Отменена</th>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <form class="orders__form" action="{{ route('orders.create') }}" method="POST">
        @csrf
        <h1 class="orders__form__title">Сформировать новую заявку</h1>

        <div class="orders__form__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>

        <div class="orders__form__first-two-inputs">
            <div class="orders__form__input-container">
                <input name="car" value="{{ old('car') }}" class="active-input" type="text" placeholder="АВТО">
            </div>
            <div class="orders__form__select-container">
                <div class="orders__form__select-container__select">
                    <p>День</p>
                    <select name="day" id="daySelect">

                    </select>
                </div>

                <div class="orders__form__select-container__select">
                    <p>Месяц</p>
                    <select name="month" id="monthSelect">
                    </select>
                </div>

                <div class="orders__form__select-container__select">
                    <p>Год</p>
                    <select name="year" id="yearSelect">
                    </select>
                </div>
            </div>
        </div>

        <div class="orders__form__textarea">
            <textarea name="description" id="textarea" placeholder="ОПИСАНИЕ ПРОБЛЕМЫ"
                class="orders__form__textarea__input" maxlength="4000"></textarea>
            <p class="orders__form__textarea__counter"><span class="orders__form__textarea__counter__count"
                    id="textareaCounter">0</span>/4000</p>
        </div>

        <div class="orders__form__second-two-inputs">
            <div class="orders__form__select-container">
                <div class="orders__form__select-container__select">
                    <p>Время бронирования</p>
                    <select name="time" id="timeSelect">

                    </select>
                </div>
            </div>

            <button type="submit" class="orders__form__btn-submit btn-out">
                <p class="btn-out__text">Забронировать</p>
            </button>
        </div>
    </form>
</div>
@vite('resources/js/orders.js')
@endsection