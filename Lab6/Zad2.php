<?php
$arr = file("arr.php");
foreach ($arr as $i => $a) echo $i, ": ", htmlspecialchars($a), "<br>";
?>
