<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
</head>

<body>
    <div class="auth-container">
        <main class="main">
            @yield('content')
        </main>
    </div>
    <footer class="footer">
        <p class="footer__text">2024 © Est et viverra pellentesque pharetra lorem proin in. Vitae magna at tempus
            commodo.</p>
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