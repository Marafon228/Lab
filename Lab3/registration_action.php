<?php
define("PAGE_TITLE","Регистрация2");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?= PAGE_TITLE ?></title>
</head>
<body>
<h1>Вы ввели: </h1>
<?php
$username=$_GET['name'];
$password=$_GET['pword'];
echo "<p>Имя пользователя = ". $username."</p>";
echo "<p>Пароль = ". $password."</p>";
?>
</body>
</html>
