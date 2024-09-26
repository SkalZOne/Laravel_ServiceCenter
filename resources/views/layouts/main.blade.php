<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="header">
        <div class="header__gradient-over-image">
            <img class="header__background-image" src="{{ URL::asset('/image/7.jpg') }}" alt="">
        </div>
        <nav class="header__navigation">
            <div class="header__navigation__links">
                <a href="#" class="header__navigation__link">Главная</a>
                <a href="#" class="header__navigation__link">(placeholder)</a>
                <a href="#" class="header__navigation__link">(placeholder)</a>
                <a href="#" class="header__navigation__link">(placeholder)</a>
            </div>
            <img class="header__navigation__burger-menu" src="{{ URL::asset('/image/burger-menu.svg') }}"
                alt="burgerMenu">
        </nav>
        <h1 class="header__title">Починим!</h1>
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
        <div class="header__info-panel">
            <div class="header__info-panel__address">
                <p>Адрес:</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="header__info-panel__phone">
                <p>Телефон:</p>
                <p>8 (812) 123-45-67</p>
                <p>8-911-123-45-67</p>
            </div>
            <div class="header__info-panel__work-timings">
                <p>Режим работы:</p>
                <p>пн-пт : 10:00 - 20:00</p>
                <p>сб-вс : 12:00 - 20:00</p>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <p class="footer__text">2024 © Est et viverra pellentesque pharetra lorem proin in. Vitae magna at tempus commodo.</p>
        <nav class="footer__navigation">
            <div class="footer__navigation__links">
                <a href="#" class="footer__navigation__link">Главная</a>
                <a href="#" class="footer__navigation__link">(placeholder)</a>
                <a href="#" class="footer__navigation__link">(placeholder)</a>
                <a href="#" class="footer__navigation__link">(placeholder)</a>
            </div>
        </nav>
    </footer>
</body>

</html>