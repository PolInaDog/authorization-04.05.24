<?php
// подключение к БД
$host = "Localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = new mysqli($host, $username, $password, $database);

// проверка подключения к БД

if ($conn->connect_error) {
    die("Ошибка подлючения к БД" . $conn->connect_error);
}
