<!DOCTYPE html>
<html>
<head>
    <title> METANIT.COM </title>
    <meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["technologies"])){
$technologies = $_POST["technologies"];
foreach($technologies as $item) echo "Sitem<br />";
}
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p> ASP.NET : <input type="checkbox" name="technologies[]"
                         value=" ASP.NET " /></p>
    <p>PHP: <input type="checkbox" name="technologies[]" value="PHP" /></p>
    <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js"
        ></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
