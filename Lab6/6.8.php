<?php
$h = fopen("my_file.html","r");
while (!feof ($h)) {
    $content = fgetc($h);
    echo $content, "<br>";
}
    fclose($h);
?>
