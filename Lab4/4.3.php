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
    <select name="course" size="1">
        <option value=" ASP.NET "> ASP.NET </option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
    </select>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
