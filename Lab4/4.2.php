<!DOCTYPE html>
<html>
<head>
    <title> METANIT.COM </title>
    <meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["course"]))
    $course = $_POST["course"];
echo $course;
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <input type="radio" name="course" value=" ASP.NET " /> ASP.NET <br>
    <input type="radio" name="course" value="PHP" />PHP <br>
    <input type="radio" name="course" value="Node.js" />Node.js <br>
    <input type="submit" value="Отправить"></form></body></html>
