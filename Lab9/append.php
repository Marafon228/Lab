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

echo "Open data base - Yes"."<br>"; // Запрос к таблице
$str_sql_query= "SELECT * FROM Tb1"; // Запрос к таблице
if (!$result=mysqli_query($link, $str_sql_query))
{
    echo "Not RUN query Tb1"."<br>";
    exit();
}else echo "Query Table data base - Yes"."<br>";
$newnom = '203040';
$newfam = 'Фамилия5';

// ДОБАВЛЕНИЕ - ОБНОВЛЕНИЕ - УДАЛЕНИЕ ЗАПИСЕЙ
//!!!!!снимаем комментарий по очередно для одного варианта!!!!!
// Вставляем строку новой записи 1 вариант
//$str_sql_query= "INSERT INTO Tb1 SET Nom='Новый номер', Fam='Новая Фамилия'";
//$str_sql_query="INSERT INTO Tb1 SET Nom='$newnom', Fam='$newfam'";
// Вставляем строку новой записи 2 вариант
// $str_sql_query="INSERT INTO Tb1(nom, fam) VALUES ('55555555','Иванов')";
// обновЛЕНИЕ ЗАПисЕй - замена фамилии по номеру телефона
// $str_sql_query="UPDATE Tb1 SET fam = 'Это замена' WHERE nom='55555555'";
// УДАЛЕНИЕ ЗАПИСЕЙ с указанным номером
//
//$str_sql_query="DELETE FROM Tb1 WHERE nom='55555555'";
// Запрос к таблице для добавления, обновления и удаления записей
// Выполняем запрос для обновления записей
if (!mysqli_query($link, $str_sql_query)) {
    echo "Не могу выполнить запрос к Tb1 на добавление записи"."<br>";
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

echo "<h2 ALIGN=CENTER> <b> Вывод из таблицы Tb1 базы данных Phone </b> </H2>";
echo "<table cols=2 border=1 WIDTH=300 CELLPADDING=2 ALIGN=CENTER>\n";
echo "<tr> <td> Телефон </td> <td> Фамилия </td></tr>";
$key1 = 0;
for ($i=1; $i <= $vsego; $i++) { // Формирование строк
    echo "<tr>";
    for ($j=1; $j <= 2; $j++) {// Формирование столбцов
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
