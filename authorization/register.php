<?php
    session_start();
    if ($_SESSION['user']){
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПИВО</title>
    <link rel="stylesheet" type="text/css" href="../css/obnul.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<!-- ВЕРХНЕЕ ЗАФИКСИРОВАННОЕ МЕНЮ -->
<nav class="menu">
    <a style="float: left"class="header__logo" href="../index.html"><img src="../img/logo.jpg" width="80" height="80" alt="Undergraund" ></a>
    <p style="float: right"><a class="menu__link" href="authrization.php">Авторизация</a></p>
    <p style="float: right"><a class="menu__link" href="../contacts/contacts.html">Контакты</a></p>
    <p style="float: right"><a class="menu__link" href="../catalog/catalog.html">Каталог</a></p>
    <p style="float: right"><a class="menu__link" href="../basket/basket.html">Корзина</a></p>
</nav>
<!-- ФОРМА АВТОРИЗАЦИИ -->
<form>
    <label>ФИО</label>
    <input type="text" name="fullname"  placeholder="Введите своё ФИО">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите email">
    <label>Изаброжение профиля</label>
    <input type="file" name="avatar">
    <label>Пороль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Введите пароль повторно">
    <button type="submit" class="register-btn">Зарегестрироватсья</button>
    <p>
        У вас уже есть аккаунт - <a href="/authorization.php">Авторизуйтесь</a>!
    </p>
    <p class="msg none">Test text </p>;

    </form>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
