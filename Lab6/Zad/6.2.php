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
    $x = array(array("Tom", "Alice"), array("Bob", "Kate"));
    file_put_contents('my_file.html', json_encode($x) );
    echo $a=file_get_contents('my_file.html')

    ?>
</h1>
</body>
</html>