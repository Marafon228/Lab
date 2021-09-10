<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$capital['Russia'] = 'Москва';
$capital['USA'] = 'Вашингтон';
$capital['France'] = 'Париж';
$capital['Ukraine'] = 'Киев';
$capital['Italy'] = 'Рим';
echo $capital ['Russia'];
$naselenie = array(
    'Russia' => 141,
    'USA' => 304,
    'France' => 63,
    'Ukraine' => 46,
    'Italy' => 59
);
echo '<br/>Столица России '.$capital['Russia']. ', население - '.$naselenie['Russia'].' млн. человек';
?>
</body>
</html>
