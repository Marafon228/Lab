<!DOCTYPE HTML public "-//W3C//DTD HTML 4.01/EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Загрузка изображений с изменением размеров</title>
</head>
<body>
<h1>Загрузка изображения с изменением размеров</h1>
<?php
$path = 'i/';
$tmp_path = 'tmp/';
$types = array('image/gif', 'image/png', 'image/jpeg');
$size = 1024000;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!in_array($_FILES['picture']['type'], $types))
        die('<p>Запрещенный тип файла. <a href="?">Попробовать другой файл?</a></p>');
    if ($_FILES['picture']['size'] > $size)
        die('<p>Слишком большой размер файла. <a href="?">Попробовать другой файл?</a></p>');
    function resize($file, $type = 1, $rotate = null, $quality = null)
    {
        global $tmp_path;
        $max_thumb_size = 200;
        $max_size = 600;
        if ($quality == null)
            $quality = 75;
        if ($file['type'] == 'image/jpeg')
            $source = imagecreatefromjpeg($file['tmp_name']);
        elseif ($file['type'] == 'image/png')
            $source = imagecreatefrompng($file['tmp_name']);
        elseif ($file['type'] == 'image/gif')
            $source = imagecreatefromgif($file['tmp_name']);
        else
            return false;
        if ($rotate != null)
            $src = imagerotate($source, $rotate, 0);
        else
            $src = $source;
        $w_src = imagesx($src);
        $h_src = imagesy($src);
        if ($type == 1)
            $w = $max_thumb_size;
        elseif ($type == 2)
            $w = $max_size;

        $dest = null;
        if ($w_src > $w) {
            $ratio = $w_src / $w;
            $w_dest = round($w_src / $ratio);
            $h_dest = round($h_src / $ratio);
            $dest = imagecreatetruecolor($w_dest, $h_dest);
            imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);
            imagejpeg($dest, $tmp_path . $file['name'], $quality);
            imagedestroy($dest);
            imagedestroy($src);
            return $file['name'];
        } else {
            imagejpeg($dest, $tmp_path . $file['name'], $quality);
            imagedestroy($src);

            return $file['name'];
        }
    }
    $_POST['file_rotate'] = isset($_POST['file_rotate']) ? $_POST['file_rotate']: null;
    $name = resize($_FILES['picture'], $_POST['file_type'], $_POST['file_rotate']);
    if (!@copy($tmp_path . $name, $path . $name))
        echo '<p>Что-то пошло не так </p>';
    else
        echo '<p>Загрузка удачно прошла удачно <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a>.</p>';
    unlink($tmp_path . $name);
}
?>
<form method="post" enctype = "multipart/form-data">
    <input name="picture" type="file" />
    <br>
    <label>Тип загрузки</label>
    <br>
    <select name="file_type">
        <option value="1">Эскиз</option>
        <option value="2">Большое изображение</option>
    </select>
    <br>
    <label>Поворот</label>
    <br>
    <input type="text" name="file_rotate">
    <br>
    <input type="submit" value="Загрузить" />
</form>
</body>
</html>
