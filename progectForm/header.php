<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.10.2015
 * Time: 15:43
 */
?>
<!DOCTYPE html>
<html>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<head>
    <meta charset = "UTF-8">
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include_once('functions.php'); ?>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Бренд та перемикач згруповані для кращого відображення на мобільних пристроях -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/DB_in_Form_PHP/progectForm/index.php">Головна</a>
        </div>

        <!-- Зібрано навігаційні лінки, форми, та інший вміст для переключення -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--        <li class="active"><a href="#">Лінк <span class="sr-only">(поточний)</span></a></li>-->
                <li><a href="/DB_in_Form_PHP/progectForm/vievDoc.php">Перегляд</a></li>
                <!--        <li class="dropdown">-->
                <!--          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Спадне меню <span class="caret"></span></a>-->
                <!--          <ul class="dropdown-menu" role="menu">-->
                <!--            <li><a href="#">Дія</a></li>-->
                <!--            <li><a href="#">Інша дія</a></li>-->
                <!--            <li><a href="#">Тут ще щось</a></li>-->
                <!--            <li class="divider"></li>-->
                <!--            <li><a href="#">Відокремлений лінк</a></li>-->
                <!--            <li class="divider"></li>-->
                <!--            <li><a href="#">Ще один відокремлений лінк</a></li>-->
                <!--          </ul>-->
                <!--        </li>-->
            </ul>
            <!--      <form class="navbar-form navbar-left" role="search">-->
            <!--        <div class="form-group">-->
            <!--          <input type="text" class="form-control" placeholder="Search">-->
            <!--        </div>-->
            <!--        <button type="submit" class="btn btn-default">Відправити</button>-->
            <!--      </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.google.com.ua/">Google</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Спадне меню <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/DB_in_Form_PHP-/progectForm/index.php">Головна</a></li>
                        <li><a href="/DB_in_Form_PHP-/progectForm/vievDoc.php">Перегляд</a></li>
                        <!--            <li><a href="#">Тут ще щось</a></li>-->
                        <!--            <li class="divider"></li>-->
                        <!--            <li><a href="#">Відокремлений лінк</a></li>-->
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>