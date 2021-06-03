<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testopedia - психологические тестирования</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="src/css/index.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<?php include "config/db.php" ?>
    <header class="header">
        <div class="burger--wrapper">
            <div class="burger">
                <span></span>
            </div>
        </div>
        <div class="dropdown">
            <a href="index.php">Главная</a>
            <a href="tests.php">Доступные тесты</a>
            <a href="">Форум</a>
            <a href="#beMember">Стать партнёром</a>
            <p>© 2021 - testopedia</p>
        </div>
        <div class="logo">
            <p><a href="index.php">testopedia</a></p>
        </div>
        <div class="login">
            <?php if ($_COOKIE['auth']!='1') { ?>
            <a href="login.php" class="main-btn btn-primary">Войти</a>
            <?php } else {?>
                <div class="profile">
                    <?php 
                        $query = mysqli_query($link, "SELECT name FROM users WHERE login='".$_COOKIE['login']."'");
                        $queryRes = mysqli_fetch_array($query);
                    ?>
                    <p><?php echo $queryRes['name']; ?></p>
                    <i class="fas fa-chevron-down"></i>
                    <div class="profile__dropdown">
                        <a href="lk.php" class="">Личный кабинет</a>
                        <a href="javascript://" class="" id='logoutBtn'>Выйти</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </header>