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

$sdb_name = "192.168.10.81";
$user_name="sdenisov";
$user_pass = "dq7M7Z";
$db_name = "sdenisov_College";

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
//mysqli_query($link, "CREATE TABLE `2isip3` (id integer(10) NOT NULL AUTO_INCREMENT primary key, fio varchar(50),age integer(5),hobbyt varchar(50))") or die (" <br> Ошибка создания таблицы <br /> ".mysqli_error($link));
//mysqli_close($link);

echo "Open data base - Yes"."<br>"; // Запрос к таблице
$str_sql_query= "SELECT * FROM `2isip3`"; // Запрос к таблице
if (!$result=mysqli_query($link, $str_sql_query))
{
    echo "Not RUN query 2isip3"."<br>";
    exit();
}else echo "Query Table data base - Yes"."<br>";
// ДОБАВЛЕНИЕ - ОБНОВЛЕНИЕ - УДАЛЕНИЕ ЗАПИСЕЙ
//!!!!!снимаем комментарий по очередно для одного варианта!!!!!
// Вставляем строку новой записи 1 вариант
//$str_sql_query= "INSERT INTO 2isip3 SET fio='Иванов Иван Иванович', age='18',hobbyt='Фродо'";
//$str_sql_query="INSERT INTO 2isip3 SET fio='Петров Иван Иванович', age='19',hobbyt='Фродо'";
// Вставляем строку новой записи 2 вариант
//$str_sql_query="INSERT INTO 2isip3(fio, age, hobbyt) VALUES ('Ещё Иванов Иван Иванович','20','Фродо')";
// обновЛЕНИЕ ЗАПисЕй - замена фамилии по номеру телефона
//$str_sql_query="UPDATE 2isip3 SET age = '15' WHERE id='1'";
// УДАЛЕНИЕ ЗАПИСЕЙ с указанным номером
//
//$str_sql_query="DELETE FROM 2isip3 WHERE id='5'";
// Запрос к таблице для добавления, обновления и удаления записей
// Выполняем запрос для обновления записей
if (!mysqli_query($link, $str_sql_query)) {
    echo "Не могу выполнить запрос к 2isip3 на добавление записи"."<br>";
    exit();
}

// ДОБАВЛЕНИЕ - ОБНОВЛЕНИЕ - УДАЛЕНИЕ ЗАПИСЕЙ (конец блока)
$vsego = mysqli_num_rows($result);
echo "Всего выбрано записей: ".$vsego;
while ($mas = mysqli_fetch_row($result)):
    foreach ($mas as $field) {
        $key1 = $key1 + 1;
        $array_name[$key1] = $field;
    }
endwhile;

echo "<h2 ALIGN=CENTER> <b> Вывод из таблицы 2isip3 базы данных sdenisov_College </b> </H2>";
echo "<table cols=4 border=1 WIDTH=100% CELLPADDING=4 ALIGN=CENTER>\n";
echo "<tr> <td> id </td> <td> ФИО </td> <td> Возраст </td> <td> Хоббит </td> </tr>";
$key1 = 0;
for ($i=1; $i <= $vsego; $i++) { // Формирование строк
    echo "<tr>";
    for ($j=1; $j <= 4; $j++) {// Формирование столбцов
        $key1 = $key1 + 1;
        print "<td>" . $array_name[$key1] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>
</body>
</html>
