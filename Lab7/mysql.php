<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <title>Работа с БД</title>
</head>
<body>

<?php
/* Пример 1
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "SELECT * FROM firma");
$myrow = mysqli_fetch_array($result);
echo $myrow['name'] .'<br />' ;
echo $myrow['dol'] .'<br />' ;
*/
?>

<?php
/* Пример 2
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "SELECT * FROM firma");
$myrow = mysqli_fetch_array($result);
echo $myrow['lastname'] .'<br />' ;
*/
?>
<?php
/* Пример 3
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "SELECT * FROM firma where id = 2");
$myrow = mysqli_fetch_array($result);
echo $myrow['lastname'] .'<br />' ;
*/
?>
<?php
/* Пример 4
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "SELECT * FROM firma where id = 2");
$myrow = mysqli_fetch_array($result);
    echo $myrow['dol'] .'<br />' ;
*/
?>
<?php
/*Пример 5
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "SELECT * FROM firma");
while ($row = mysqli_fetch_array($result)) {
    echo 'Сотрудник - № ' . $row['id'] . '<br />';
    echo $row['name'] . '<br />';
    echo $row['lastname'] . '<br />';
    echo $row['dol'] . '<br />';
    echo '<hr />';
}
*/
?>
<?php
/* Пример 6
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query($db, "INSERT INTO firma (name, lastname, dol) VALUES ('Андрей', 'Андреев', 'Водитель') ");
if ($result == true)
echo "Информация в базу добавлена успешно";
else
echo "Информация в базу не добавлена ";
*/
?>


</body>
</html>
