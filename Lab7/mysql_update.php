<?php
$db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
$result = mysqli_query("UPDATE firma SET 'name' = 'Егор', 'lastname' = 'Егоров' WHERE 'id' = '2'");
        if ($result == true)
            echo "Информация в базу добавлена успешно";
        else
            echo "Информация в базу не добавлена ";
?>
