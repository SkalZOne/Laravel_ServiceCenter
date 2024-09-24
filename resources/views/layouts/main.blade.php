<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ URL::asset('/image/logo_example.png') }}" alt="Logo">
            <p>
                Починим!
                <br>
                Сервисный центр
            </p>
        </div>
        <nav>
            <a href="#">Главная</a>
            <a href="#">Услуги</a>
            <a href="#">О нас</a>
            <a href="#">Контакты</a>
            <img id="profileBtn" src="{{ URL::asset('/image/profile.svg') }}" alt="Profile">
            <div id="profileMenu">
                <img id="profileCross" src="{{ URL::asset('/image/cross.svg') }}" alt="cross">
                <a href="">Войти</a>
                <a href="">Зарегестрироваться</a>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
</html>