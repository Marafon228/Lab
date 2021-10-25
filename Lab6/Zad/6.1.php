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
    <title>6.1 лаба</title>
</head>
<body>
<h1>
    <?php
    echo $a = file_get_contents('6_laba.php');
    file_put_contents('my_file.html', $a.'sadad');
    ?>
</h1>
</body>
</html>