<?php
$h = fopen("my_file.html","r+");
$content = fgets($h,2);
fclose($h);
echo $content;
?>