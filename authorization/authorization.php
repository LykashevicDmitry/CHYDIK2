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
    <form action="vendor/sigin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пороль</label>
        <input type="password" name="password" placeholder="Введите пороль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>!
        </p>
        <?php
                if ($_SESSION['massage']) {
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['massage']);
            ?>
</form>
</body>
</html>