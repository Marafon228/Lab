<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$auto = [];
$auto['bmw'] = [
    'model' => 'x5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2006
];
$auto['opel'] = [
    'model' => 'Carina',
    'speed' => 130,
    'doors' => 4,
    'year' => 2007
];
$auto['toyota'] = [
    'model' => 'Corsa',
    'speed' => 140,
    'doors' => 5,
    'year' => 2007
];
echo '<br/> BMW - '.$auto['bmw']['model'].' - '.$auto['bmw']['speed'].' - '.$auto['bmw']['doors'].' - '.$auto['bmw']['year'];
echo '<br/> Opel - '.$auto['opel']['model'].' - '.$auto['opel']['speed'].' - '.$auto['opel']['doors'].' - '.$auto['opel']['year'];
echo '<br/> Toyota - '.$auto['toyota']['model'].' - '.$auto['toyota']['speed'].' - '.$auto['toyota']['doors'].' - '.$auto['toyota']['year'];
?>
</body>
