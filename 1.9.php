<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>�������� PHP-��������</title>
</head>
<body>
<?php
$name = [];
$name[0] = '����';
$name[1] = '����';
$name[2] = '����';
$name[3] = 'Anya';
echo $name[3]. '<br/>';

$name = [
 0=> '����',
 1=> '����',
 2=> '����',
 3=> 'Anya'
];
echo $name[3]. '<br/>';

$name = [];
$name[] = '����';
$name[] = '����';
$name[] = '����';
$name[] = 'Anya';
echo $name[3]. '<br/>';

$name = [
'����',
'����',
'����',
'Anya'
];
echo $name[3]. '<br/>';
?>
</body>
</html>