<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
//Вычисляем текущую дату в формате "день.месяц.год"
$dat = date('d.m.Y');
//Вычисляем тукущее время
$tm = date('h:i:s');
echo 'Текущая дата: '.$dat. '<hr/';
echo 'Текущее время: '.$tm. '<hr/' ;
?>
</body>
</html>