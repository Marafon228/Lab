<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Успеваемость </title>
</head>
<body>
<?php
// Соединяемся с MySQL
$link = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_group");

// Выполняем запрос к базе данных skgmi
$resultat = mysqli_query($link, "SELECT * FROM uspevaemost");
//$resultat = mysqli_query($link, "SELECT * FROM uspevaemost ORDER BY fio desc limit 2");
//$resultat = mysqli_query($link, "SELECT * FROM uspevaemost where `id` = '1'");

//Записываем первую запись таблицы в массив $row
$row = mysqli_fetch_array($resultat);

// Создаем шапку таблицы
?>
<table width="40%" border="1" align="center">
    <tr>
        <td width="19%"><div align="center">Код студента</div></td>
        <td width="46%"><div align="center">ФИО</div></td>
        <td width="14%"><div align="center">Пропуски</div></td>
        <td width="21%"><div align="center">Средний рейтинг</div></td>
    </tr>
    <?php
    //выводим строки таблицы в цикле
    do
    {
        echo <<<_HTML
<tr>
	<td>{$row['id']}</td>
	<td>{$row['fio']}</td>
	<td>{$row['propuski']}</td>
	<td>{$row['sr_reyting']}</td>
</tr>
_HTML;
    }
    while ($row = mysqli_fetch_array($resultat));
    ?>

</table>

<?php
/*
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_group");
$result = mysqli_query($db,"UPDATE `uspevaemost` SET `fio` = 'Бегин Рита', `propuski` = '3', `sr_reyting` = '440' WHERE `id` = '2'");
*/
?>
<?php
/*
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_group");
$result = mysqli_query($db,"DELETE FROM `uspevaemost` WHERE `id` = '8'");
*/
?>
<?php
/*
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_group");
$result = mysqli_query($db, "INSERT INTO uspevaemost (fio, propuski, sr_reyting) VALUES ('Обычный Человек', '4', '400') ");
*/
?>

</body>
</html>
