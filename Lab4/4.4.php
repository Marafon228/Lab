<!DOCTYPE html>
<html>
<head>
    <title> METANIT.COM </title>
    <meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["courses"]))
    $courses = $_POST["courses"];
foreach($courses as $item) echo "Sitem<br>";
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <select name="courses[]" size="4" multiple="multiple">
        <option value=" ASP.NET "> ASP.NET </option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
    </select><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>