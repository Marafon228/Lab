<?php
$file = 'Zad1.php';
$current = file_get_contents($file);
file_put_contents($file, $current);
$d = filesize ('Zad1.php');
echo $d;
?>
