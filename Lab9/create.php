<html>
<head>
    <meta charset="utf-8" />
    <title>Лабораторная работа № 9</title>
</head>
<body>
<h1>ГАПОУ КО "КТК"</h1>
<br> Информационные системы <br />
<hr />
<b>Лабораторная работа № 9</b>
<br />
<?php
$key1 = 0;

echo "<b> Создание базы данных на сервере MySQL </b> "."<br />"."<hr />";

//$sdb_name = "127.0.0.1:3306";
//$user_name="root";
//$user_pass = "";
//$db_name = "Phone";
$sdb_name = "192.168.10.81";
$user_name="sdenisov";
$user_pass = "dq7M7Z";
$db_name = "sdenisov_Phone";


$link = @mysqli_connect($sdb_name, $user_name, $user_pass);
echo "Report MySQL-server"."<br />"; // Соединение с сервером
if (!$link) {
    echo "Нет соединения с MySQL-server <br>";
    exit();
}

echo "Есть соединение с MySQL-server <br /> <hr />"; // Создание базы данных
$str_sql_query = "CREATE DATABASE $db_name";
echo " Message: ".$str_sql_query;
if (!@mysqli_query($link, $str_sql_query))
    echo " <br> Не создали новую базу (уже существует) <br />";

// Выбор базы данных
if (!mysqli_select_db($link, $db_name)) {
    echo " не выбрали базу данных - не нашли."."<br>";
    exit();
}
echo "<br> Выбрали и открыли базу данных <br />"; // Создание таблицы
mysqli_query($link, "CREATE TABLE `Tb1` (nom varchar(50), fam varchar(50))") or die (" <br> Ошибка создания таблицы <br /> ".mysqli_error($link));
mysqli_close($link);
?>
</body>
</html>
