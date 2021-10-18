<?php
$h = fopen("my_file.html","r");
while (! feof ($h)) {
    $content = fgetss($h, 1024, '<b><i>');
    echo $content, "<br>";
}
fclose($h);
?>
