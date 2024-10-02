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
</div>
@endsection