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
                <th id="tableDescription" class="description">
                    <div class="description__container">
                        <span class="description__container__text text-hidden">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Debitis, velit.</span>
                        <img id="arrowDown" class="description__container__arrow-down" src="/image/arrow-down.svg"
                            alt="arrowDown" style="display: none">
                    </div>
                </th>
                <th>05.03.2005</th>
                <th>16:35-17:35</th>
                <th class="open">Открыта</th>
            </tr>
            <tr>
                <th>2</th>
                <th>Honda Integra Type R</th>
                <th id="tableDescription" class="description">
                    <div class="description__container">
                        <span class="description__container__text text-hidden">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Sit sapiente earum sunt? Cupiditate, minima dolor distinctio id, mollitia
                            ratione, sapiente maiores officia accusantium saepe explicabo. Deleniti ea quod quas minima,
                            praesentium eius, aperiam sit quia aliquid maxime, eaque at? Magnam doloribus quisquam
                            mollitia nisi officiis possimus quis, et ad explicabo?</span>
                        <img id="arrowDown" class="description__container__arrow-down" src="/image/arrow-down.svg"
                            alt="arrowDown" style="display: none">
                    </div>
                </th>
                <th>05.03.2005</th>
                <th>16:35-17:35</th>
                <th class="closed">Закрыта</th>
            </tr>
            <tr>
                <th>3</th>
                <th>Nissan Almera</th>
                <th id="tableDescription" class="description">
                    <div class="description__container">
                        <span class="description__container__text text-hidden">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Doloribus debitis, exercitationem suscipit odit totam obcaecati natus
                            aliquid nobis eum error illum laboriosam soluta, enim, autem quo iusto officia rerum?
                            Laboriosam in atque sequi a voluptatum eligendi quia officia optio tempore. Fuga harum
                            aperiam, odio tenetur omnis ducimus ea placeat est obcaecati exercitationem aut dignissimos
                            eos minus sapiente optio beatae deserunt id molestias rem et cupiditate tempora cum
                            distinctio? Magnam distinctio sunt quidem saepe, eius error explicabo molestiae magni beatae
                            non iusto, repellat tempore vero provident eligendi repellendus autem! Repellendus incidunt
                            id laborum minima quis velit odit beatae recusandae adipisci voluptatibus. Blanditiis
                            recusandae ea ratione alias esse. Quidem, ducimus rerum doloremque consequuntur ea neque
                            porro officia voluptates nisi eos quo sint iste optio! In molestias dolorem ipsum vel
                            voluptatem eligendi omnis, repellendus esse distinctio, aliquam tenetur cumque architecto
                            eum, libero ipsam ullam error delectus quidem nisi! Magni, nobis vero voluptatum sint
                            quaerat velit et consequuntur eveniet amet similique, earum autem, omnis cum cupiditate hic
                            error tempore nostrum sapiente qui laudantium dolorem minus eum voluptates repellat!
                            Expedita debitis sunt explicabo, perferendis eius sed consequatur provident. Magnam,
                            veritatis! Dicta fuga aliquam laudantium animi, molestias, aspernatur amet rem veritatis,
                            consequatur dolore vitae nobis modi!</span>
                        <img id="arrowDown" class="description__container__arrow-down" src="/image/arrow-down.svg"
                            alt="arrowDown" style="display: none">
                    </div>
                </th>
                <th>05.03.2015</th>
                <th>18:35-20:35</th>
                <th class="canceled">Отменена</th>
            </tr>
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