<?php
$h = fopen("my_file.html", "w");
$text = "Этот текст запишем в файл.";
if (fwrite($h,$text))
    echo "Запись прошла успешно";
else
    echo "Произошла ошибка при записи данных";
fclose($h);
?>
