<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="header">
        <nav class="header__navigation">
            <div class="header__navigation__links">
                <a href="#" class="header__navigation__link">Главная</a>
                <a href="#" class="header__navigation__link">Оклейка автомобилей</a>
                <a href="#" class="header__navigation__link">Детейлинг автомобилей</a>
                <a href="#" class="header__navigation__link">Галерея работ</a>
            </div>
            <img class="header__navigation__burger-menu" src="{{ URL::asset('/image/burger-menu.svg') }}"
                alt="burgerMenu">
        </nav>
        <h1 class="header__title">CAR MUSC</h1>
        <div class="header__dots four-dots">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
            <img src="{{ URL::asset('/image/red-dot.svg') }}" alt="dot">
        </div>
        <p class="header__under-title-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae orci urna
            amet penatibus.</p>
        <button class="header__order-btn btn-out">
            <p class="btn-out__text">Наши услуги</p>
        </button>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer"></footer>
</body>

</html>