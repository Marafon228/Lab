<?php
$arr = file("my_file.html");
foreach ($arr as $i => $a) echo $i, ": ", htmlspecialchars($a), "<br>";
?>
