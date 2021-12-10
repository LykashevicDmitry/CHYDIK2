<?php
if (!$_SESSION['user']){
    header('Location: /');
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
    <!-- Профиль -->
    <form
        <img src="<?= $_SESSION['user']['avatar'] ?> " width="100" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?=$_SESSION['user']['email'] ?></a>
        <a href="vender/logout.php"class="logout">Паунс в окно</a>
    </form>
</body>
</html>