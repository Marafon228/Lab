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
        'color' => 'белый',
    'year' => 2005,
    'probeg' => 2000
];
$auto['audi'] = [
    'color' => 'синий',
    'year' => 2003,
    'probeg' => 2300
];
echo '<br/> Год BMW - '.$auto['bmw']['year'];
echo '<br/> Год Audi - '.$auto['audi']['year'];
?>
</body>
</html>
