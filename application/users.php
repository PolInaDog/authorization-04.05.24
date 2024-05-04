<?php
session_start();
include("application/db.php");

// функция для установки значений в сессию
function setSession($id, $us_name,)
{
    $_SESSION['id'] = $id;
    $_SESSION['us_name'] = $us_name;
}


// авторизация
// если страница запрашивается методом пост и внтури массива POST есть элемент с ключом  button-log то  запишем в переменные
// логин и пароль

if ($_SESSION["REQUEST_METHOD"] == "POST" &&  isset($_POST['button_log'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Логин" . $email;
    echo '<br>';
    echo "Пароль" . $password;
}
