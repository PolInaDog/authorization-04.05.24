<?php
session_start();
include("application/db.php");

// функция для установки значений в сессию
function setSession($id, $us_name)
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
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['button_reg'])) {
    $us_name = $_POST['login'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pass_first = $_POST['pass-first'];
    $pass_second = $_POST['pass-second'];
    if ($pass_first !== $pass_second) {
        echo "Пароли не совпадают .";
    } else {
        $hashed_password = password_hash($pass_first, PASSWORD_DEFAULT);
        $check_email_query = "SELECT * FROM user WHERE email = '$email'";
        $check_email_result = $conn->query($check_email_query);
        if ($check_email_result->num_rows > 0) {
            echo "Пользователь с таким  адресом email почти уже существует.";
        } else {
            $stmt = $conn->prepare("INSERT INTO users(us_name, email, age, password) VALUES(?,?,?,?)");
            $stmt->bind_param("ssis", $us_name, $email, $age, $hashed_password);
            if ($stmt->execute()) {
                echo "Регистрация успешна";
                setSession($conn->insert_id, $us_name);
                header("Location: /profile/accaunt.php");
                exit();
            } else {
                echo "Ошибка при регистрации :" . $conn->error;
            }
        }
        $stmt->close();
    }
}
