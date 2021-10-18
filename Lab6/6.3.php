<?php
$h = fopen("my_file.html","a");
$add_text = "Добавим текст в файл.";
if(fwrite($h,$add_text,7))
    echo "Добавление текста прошло успешно<br>";
else
    echo "Произошла ошибка при добавлении данных<br>";
fclose($h);
?>
