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
 /*
 $h = fopen('my_file.html','w');
 $text = "Этот текст дуратский!.";
 $add_text = "И этот текст дуратский";
 $content = fread($h, filesize('my_file.html'));
 if (fwrite($h,$text))
     echo "ВП<br>";
 else
     echo "Труе агаин<br>";
 if (fwrite($h, $add_text, 7))
     echo "ВП<br>";
 else
     echo "Труе агаин<br>";
 fclose($h);
 echo $content;
 */
 echo $a = file_get_contents('my_file.html');
 file_put_contents('my_file.html', $a.'sadad');
 $d = filesize ('my_file.html');
 if ($d > 20)
 file_put_contents('my_file.html', ' ');
 echo $d;
 ?>
 </h1>
 </body>
</html>