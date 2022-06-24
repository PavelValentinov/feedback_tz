<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <meta name="description" content="Создание формы обратной связи" />
    <link href="/css/app.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">

</head>
<header class="header">
    <ul class="main-menu">
        <li class="menu-itemm">
            <a href="/">Главная</a>
        </li>
        <li class="menu-itemm">
            <a href="/feedback">Форма обратной связи</a>
        </li>
        <li class="menu-itemm">
            <a href="/all_info_feedback">Данные с формы</a>
        </li>
    </ul>
    </nav>
</header>
<body>
<div class="form-wrapper">

    <div class="container">
        @yield('content')
    </div>

</div>

</body>
</html>
