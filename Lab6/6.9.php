<?php
$n = @readfile("my_file1.html");
if (!$n) echo "Error in readfile";
else echo $n;
?>