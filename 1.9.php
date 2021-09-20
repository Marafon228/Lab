<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$name = [];
$name[0] = 'Маша';
$name[1] = 'Саша';
$name[2] = 'Ваня';
$name[3] = 'Anya';
echo $name[3]. '<br/>';

$name = [
 0=> 'Маша',
 1=> 'Саша',
 2=> 'Ваня',
 3=> 'Anya'
];
echo $name[3]. '<br/>';

$name = [];
$name[] = 'Маша';
$name[] = 'Саша';
$name[] = 'Ваня';
$name[] = 'Anya';
echo $name[3]. '<br/>';

$name = [
'Маша',
'Саша',
'Ваня',
'Anya'
];
echo $name[3]. '<br/>';
?>
</body>
</html>