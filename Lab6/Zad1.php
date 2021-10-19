<?php
$h = fopen('Zad1.php', 'r');
while (!feof ($h)) {
    $content = fgetc($h);
    echo $content, "<br>";
}
fclose($h);
?>

