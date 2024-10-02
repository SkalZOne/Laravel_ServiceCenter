@extends('layouts/auth')

@section('content')
<div class="orders">
    <h1 class="orders__table__title">Ваши заявки</h1>
    <table>
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
            <tr>
                <th>1</th>
                <th>BMW</th>
                <th class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugiat?</th>
                <th>05.03.2005</th>
                <th>16:35-17:35</th>
                <th class="open">Открыта</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Honda Integra Type R</th>
                <th class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugiat?</th>
                <th>05.03.2005</th>
                <th>16:35-17:35</th>
                <th class="closed">Закрыта</th>
            </tr>
            <tr>
                <th>3</th>
                <th>Nissan Almera</th>
                <th class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ullam enim
                    quisquam laudantium dolor voluptas ex dolorum voluptates, beatae expedita asperiores sequi,
                    consequuntur ad magnam quibusdam ipsum numquam. Veniam mollitia sint nihil laboriosam maxime
                    possimus ab aperiam earum excepturi error?</th>
                <th>05.03.2015</th>
                <th>18:35-20:35</th>
                <th class="canceled">Отменена</th>
            </tr>
        </tbody>
    </table>

    <form class="orders__form" action="">
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
    </form>
</div>
@vite('resources/js/orders.js')
@endsection