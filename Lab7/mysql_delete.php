<?php
$db = mysqli_connect("localhost", "Ya", "12345", "firstbd");
$result = mysql_query($db,"DELETE FROM `firma` WHERE `id` = '2'");
if ($result == true)
    echo "Информация из базу удалена успешно";
else
    echo "Информация из базу не удалена";
?>
