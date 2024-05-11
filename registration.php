<?php
include("./application/users.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="wrapper">
        <form class="form" action="registration.php" method="POST">
            <div class="form_content">
                <h3 class="form__title">регистрация</h3>
                <div class="form__row">
                    <input type="text" class="form__input" id="login" name="login" placeholder="ФИО">
                </div>
                <div class="form__row">
                    <input type="email" class="form__input" id="email" name="email" placeholder="Ваш email">
                </div>
                <div class="form__row">
                    <input type="text" class="form__input" id="age" name="age" placeholder="Ваш возраст">
                </div>
                <div class="form__row">
                    <input type="password" class="form__input" id="pass-first" name="pass-first" placeholder="Пароль">
                </div>
                <div class="form__row">
                    <input type="password" class="form__input" id="pass-second" name="pass-second" placeholder="Повторите пароль">
                </div>
                <div class="form__row">
                    <button name="button_reg" type="submit" class="btn">регистрация</button>
                </div>
            </div>

        </form>
    </div>
</body>

</html>