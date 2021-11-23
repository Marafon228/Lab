<?php
/** @var $db */

error_reporting(E_ALL);
ini_set('html_errors', true);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

$login = !empty($_POST['login']) ? $_POST['login']: null; // заносим введенный пользователем логин в переменную $login
$password = !empty($_POST['password']) ? $_POST['password']: null; // заносим введенный пользователем пароль в переменную $password
//
//
if (!$login || !$password) {// если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = trim(htmlspecialchars(stripslashes($login)));
$password = trim(htmlspecialchars(stripslashes($password)));

// подключаемся к базе
require_once "bd.php";// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином
$result = mysqli_query($db, "SELECT `id` FROM `users` WHERE `login`='$login'");
$myrow = mysqli_fetch_array($result);

if (!empty($myrow['id'])) {
    exit("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
// если такого нет, то сохраняем данные
$result2 = mysqli_query($db, "INSERT INTO `users` (login,password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE') {
    header('Locaiton: Lab11/index.php');
    exit;
} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
