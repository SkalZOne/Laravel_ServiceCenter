<!-- Название репозитория -->
<h1>:wrench: Сервисный центр: "Починим!" :wrench:</h1>

<!-- Переводы -->
[![ru](https://img.shields.io/badge/lang-ru-blue.svg)](./README_ru.md)
[![en](https://img.shields.io/badge/lang-en-red.svg)](./README.md)

<!-- Оглавление -->
<h2>Оглавление</h2>
<ul>

<!-- Установка -->
<li>
    <a href="#installation">Установка</a>
    <ul>
        <li>
            <a href="#installation-clone">Склонировать репозиторий</a>
        </li>
        <li>
            <a href="#installation-go-to-dir">Перейти в директорию</a>
        </li>
        <li>
            <a href="#installation-docker">Установка через Docker</a>
        </li>
        <li>
            <a href="#installation-manual">Установка вручную</a>
        </li>
    </ul>
</li>

<!-- Запуск -->
<li>
    <a href="#launch">Запуск</a>
</li>

<!-- Демонстрация работы -->
<li>
    <a href="#demo">Демонстрация работы</a>
    <ul>
        <li><a href="#pages">Обычные страницы</a></li>
        <li>
            <a href="#accounts">Аккаунты</a>
            <ul>
                <li><a href="#accounts-register">Регистрация</a></li>
                <li><a href="#accounts-login">Авторизация</a></li>
            </ul>
        </li>
        <li>
            <a href="#orders">Заказы</a>
        </li>
        <li>
            <a href="#adminpanel">Админ-панель</a>
        </li>
    </ul>
</li>

<!-- Примечания -->
<li>
    <a href="#remark">Примечания</a>
</li>
</ul

<!-- Установка -->
<h2><a id="installation">Установка</a></h2>
<ul>
<!-- Склонировать репозиторий -->
<li>
    <a id="installation-clone">Склонировать репозиторий</a>
    <pre>git clone https://github.com/SkalZOne/Laravel_ServiceCenter</pre>
</li>
<!-- Перейти в директорию -->
<li>
    <a id="installation-go-to-dir">Перейти в директорию</a>
    <pre>cd Laravel_ServiceCenter</pre>
</li>

<h3>Далее есть 2 варианта установки:</h3>
<ul>
<!-- Через Docker -->
<li>
<details>
<summary><a id="installation-docker"><h3>:whale: Установка через Docker :whale:</h3></a></summary>
<ul>
<li>
Создать .env файл
<pre>cp .env.docker.example .env</pre>
</li>
<li>
Перейти на 22 строчку и настроить подключение к базе данных Docker-а<br>
<img alt="docker-db-conn" src="Readme/readmeImgs/docker_db_conn.png">
</li>
<li>
Поднять Docker контейнер
<pre>docker-compose up -d</pre>
</li>
<li>
При первом поднятии у вас начнется установка всех зависимостей, это может занять много времени, потерпите
</li>
<li>
После того, как вы увидите данные пункты в терминале, свидетельствующие о успешном поднятии контейнера, переходите к дальнейшим действиям.<br>
<img alt="docker-up-success" src="Readme/readmeImgs/docker_up_success.png">
</li>
<li>
После того, как вы увидите данные пункты в терминале, свидетельствующие о успешном поднятии контейнера, переходите к дальнейшим действиям.<br>
<img alt="docker-up-success" src="Readme/readmeImgs/docker_up_success.png">
</li>
<li>
⚠️Все последующие команды для Laravel теперь выполняются через специальную команду:
<pre>docker exec app <команда></pre>
</li>
<li>
Далее требуется провести миграции для базы данных
<pre>docker exec app php artisan migrate</pre>
</li>
<li>
Также требуется создать encryption key для Laravel:
<pre>docker exec app php artisan key:generate</pre>
</li>
</ul>
<h3>:white_check_mark: Позравляю :white_check_mark:</h3>
Вы успешно подняли контейнер через Docker. 
<br>
Сайт находится на данном адресе: <code>http://localhost:8876/</code>
<br>
Для того, чтобы завершить работу контейнера, потребуется выполнить данную команду:
<pre>docker-compose down</pre>
Для запуска:
<code>docker-compose up -d</code>
</details>
</li>
<!-- Вручную -->
<li>
<details id="installation-manual">
<summary><a id="installation-manual"><h3>:point_right: Установка вручную :point_left:</h3></a></summary>
<ul>
<li>
<h4>Установка необходимых зависимостей</h4>
<ul>

<details>
<summary>Если composer или node.js отсутствуют</summary>
<details> 
<summary>Composer</summary>

> -   Перейти по данной [ссылке](https://getcomposer.org/download/)<br>
>     ![install-page](./Readme/readmeImgs/image.png)
> -   Кликнуть по ссылке **Composer-Setup.exe** и открыть исполняемый файл
> -   Выбрать один из методов установки<br>
>     ![install-mode](./Readme/readmeImgs/image-1.png)
> -   Нажать далее
> -   Выбрать путь до установленного PHP<br>
>     ![dest-path](./Readme/readmeImgs/image-2.png)
> -   Нажать 2 раза далее
> -   Нажать установить
> -   Готово! :white_check_mark:

</details>
<details> 
<summary>Node.js</summary>

> -   Перейти по данной [ссылке](https://nodejs.org/en)<br>
>     ![node-install](./Readme/readmeImgs/image-3.png)
> -   Кликнуть по кнопке **Download Node.js (LTS)** и открыть исполняемый файл
> -   Нажать далее
> -   Принять пользовательское соглашение
> -   Выбрать путь установки<br>
>     ![dest-folder](./Readme/readmeImgs/image-4.png)
> -   Нажать 2 раза далее
> -   Нажать установить
> -   Готово! :white_check_mark:

</details>
</details>
</ul>
<li>
Выполнить данные команды в терминале:
<code>composer install</code> и
<code>npm install</code>
</li>
<li>
Создать .env файл и настроить его
<pre>cp .env.example .env</pre>
</li>
<li>
:warning: В случае, если у вас не стоит сервер с базой данных, ничего не меняйте в данном файле, а просто пропустите дальнейшие действия в данном пункте, кроме миграции
<ul>
<li>
Открыть созданный файл и перейти на 22 строку
<img alt="open-env-file" src="readme/readmeImgs/image-5.png">
</li>
<li>
Отредактировать значения в зависимости от вашей базы данных, в моем случае это выглядит так:
<img alt="open-env-file-redact" src="readme/readmeImgs/image-6.png">
</li>
<li>
Теперь требуется запустить миграцию
<pre>php artisan migrate</pre>
</li>
<li>
Создать ключ шифрования в Laravel
<pre>php artisan key:generate</pre>
</li>
</ul>
</li>
</li>
</details>
<br>
</li>
</ul>

✅Отлично, теперь вы можете переходить к разделу "Запуск"✅
</ul>

<!-- Запуск -->
<!-- Запуск -->
<h2><a id="launch">Запуск</a></h2>
<h3>Для запуска сайта необходимо открыть 2 терминала</h3>
<ul>
    <!-- Первый -->
    <li>
        В первом требуется:
        <ul>
            <li>
                Перейти в папку frontend
                <pre>cd frontend</pre>
            </li>
            <li>
                Запустить сервер для разработки
                <pre>npm run dev</pre>
            </li>
        </ul>
        После этих действий локальный сервер next.js будет запущен для разработки по адресу <b>localhost:3000</b>
    </li>
    <!-- Второй -->
    <li>
        Во втором требуется:
        <ul>
            <li>
                Перейти в папку backend
                <pre>cd backend</pre>
            </li>
            <li>
                Запустить сервер для разработки
                <pre>php artisan serve</pre>
            </li>
        </ul>
        Эта команда запустит laravel по адресу <b>localhost:8000</b>.
    </li>
</ul>
<h4>✅ Готово, теперь при переходе по <b>localhost:8000</b> откроется основной веб-интерфейс приложения. ✅</h4>

<!-- Демонстрация работы -->
<h2><a id="demo">Демонстрация работы</a></h2>
<ul>
<li>
    <h3><a id="pages">Обычные страницы</a></h3>
    <img alt="first" src="readme/readmeImgs/first.png">
    <img alt="second" src="readme/readmeImgs/second.png">
    <img alt="third" src="readme/readmeImgs/third.png">
    <img alt="fourth" src="readme/readmeImgs/fourth.png">
    <img alt="fiveth" src="readme/readmeImgs/fiveth.png">
</li>
<li>
    <h3><a id="accounts">Аккаунты</a></h3>
    <ul>
        <li>
            <h4><a id="accounts-register">Регистрация</a></h4>
            <img alt="register-errors" src="readme/readmeImgs/auth/register_valid_errors.png">
            <img alt="register-errors2" src="readme/readmeImgs/auth/register_valid_errors2.png">
        </li>
        <li>
            <h4><a id="accounts-login">Авторизация</a></h4>
            <img alt="login" src="readme/readmeImgs/auth/login.png">
            <img alt="login-errors" src="readme/readmeImgs/auth/login_errors.png">
        </li>
    </ul>
</li>
<li>
    <h3><a id="orders">Заказы</a></h3>
    <img alt="orders-new" src="readme/readmeImgs/order/new_order.png">
    <img alt="orders-created" src="readme/readmeImgs/order/created_order.png">
    <img alt="orders-redact" src="readme/readmeImgs/order/redact_order.png">
</li>
<li>
    <h3><a id="adminpanel">Админ-панель</a></h3>
    <img alt="adminpanel-order-inside" src="readme/readmeImgs/adminpanel/order_inside_admin_panel.png">
    <img alt="adminpanel-order-inside-redact" src="readme/readmeImgs/adminpanel/order_inside_admin_panel_redact.png">
</li>
</ul>

<!-- Примечания -->
<h2><a id="remark">Примечания</a></h2>
<ul>
    <li>Админ аккаунт создается по логину newfit, пароль любой</li>
</ul>