<?php
session_start();
require '../php/db.php';

$user = select('SELECT * FROM users WHERE id = :id', ['id' => $_SESSION['user_id']]);
var_dump($user);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>
    <?php require '../modules/header.php'?>
    <div class="container">
        <div class="user">
            <div class="avatar">
                <img src="" alt="avatar">
            </div>
            <div class="user_info">
                <h2></h2>
                <span></span>
            </div>
            <div class="user_settings">
                <form action="">
                    <input type="submit" value="Настройки">
                </form>
                <form action="">
                    <input type="submit" value="Выход">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
