<?php
$h = fopen("my_file.html","r");
while (!feof ($h)) {
    $content = fgets($h);
    echo $content, "<br>";
}
fclose($h);
?>