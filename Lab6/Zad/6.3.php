<?php
error_reporting('E_ALL');
ini_set('html_errors', true);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>6 лаба</title>
</head>
<body>
<h1>
    <?php
    $file_1 = file_get_contents('file_1');
    $file_2 = file_get_contents('file_2');
    $file_1_1 = explode("\r", $file_1);
    $file_2_2 = explode("\r", $file_2);
    $odin = array_intersect($file_1_1,$file_2_2);
    $neodin = array_diff($file_1_1, $file_2_2);
    $neodindva = array_diff($file_2_2, $file_1_1);
    ?>
    <ol>
        <li><?php    foreach ($odin as $item) {
                echo $item . "";
            } ?></li>
        <li><?php    foreach ($neodin as $item) {
                echo $item . "";
            } ?></li>
        <li><?php    foreach ($neodindva as $item) {
                echo $item . "";
            } ?></li>
    </ol>
</h1>
</body>
</html>