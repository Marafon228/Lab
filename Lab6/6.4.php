<?php
$h = fopen("my_file.html","r+");
$content =  fread($h,filesize('my_file.html'));
fclose($h);
echo $content;
?>
