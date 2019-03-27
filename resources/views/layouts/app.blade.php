<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <title>HandMade</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="/">
                <span class="hand__logo">Hand</span>
                <span class="made__logo">Made.<span class="yarmarka__logo">ярмарка</span></span>
            </a>
        </div>
        <div class="reg__info__cart__block">
            <a href="#" class="reg__auth__btn">Авторизация/Регистрация</a>
            <div class="info__cart__btns">
                <a href="#" class="info__btn">О ярмарке</a>
                <a href="#" class="cart__btn">Корзина <span class="count__products__cart">0</span></a>
            </div>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer>
    <div class="container">
        <div class="contacts">
            <p>Наши контакты:</p>
            <p>Телефоны: +380504269752, +380934578932</p>
            <p>E-mail: handmade.yarmarka@gmail.com</p>
        </div>
        <div class="the__rights">
            <p>© 2019 г. “HandMade Ярмарка”</p>
            <p>Все права защищены.</p>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>
