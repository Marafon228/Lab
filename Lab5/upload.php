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
/*
*   @param $main_img_obj – идентификатор изображения, на которое добавляется надпись
*   @param $watermark_img_obj – ид. изображения прозрачного png8
*   @param $alpha_level – прозрачность (0 – прозрачное, 100 – полностью непрозрачное)
*   @return $main_img_obj - указатель изображения
*/

class watermark3{

    # given two images, return a blended watermarked image
    function create_watermark( $main_img_obj, $watermark_img_obj, $alpha_level = 100 ) {
        $alpha_level	/= 100;	# convert 0-100 (%) alpha to decimal

        # calculate our images dimensions
        $main_img_obj_w	= imagesx( $main_img_obj );
        $main_img_obj_h	= imagesy( $main_img_obj );
        $watermark_img_obj_w	= imagesx( $watermark_img_obj );
        $watermark_img_obj_h	= imagesy( $watermark_img_obj );

        # determine center position coordinates
        $main_img_obj_min_x	= floor( ( $main_img_obj_w / 2 ) - ( $watermark_img_obj_w / 2 ) );
        $main_img_obj_max_x	= ceil( ( $main_img_obj_w / 2 ) + ( $watermark_img_obj_w / 2 ) );
        $main_img_obj_min_y	= floor( ( $main_img_obj_h / 2 ) - ( $watermark_img_obj_h / 2 ) );
        $main_img_obj_max_y	= ceil( ( $main_img_obj_h / 2 ) + ( $watermark_img_obj_h / 2 ) );

        # create new image to hold merged changes
        $return_img	= imagecreatetruecolor( $main_img_obj_w, $main_img_obj_h );

        # walk through main image
        for( $y = 0; $y < $main_img_obj_h; $y++ ) {
            for( $x = 0; $x < $main_img_obj_w; $x++ ) {
                $return_color	= NULL;

                # determine the correct pixel location within our watermark
                $watermark_x	= $x - $main_img_obj_min_x;
                $watermark_y	= $y - $main_img_obj_min_y;

                # fetch color information for both of our images
                $main_rgb = imagecolorsforindex( $main_img_obj, imagecolorat( $main_img_obj, $x, $y ) );

                # if our watermark has a non-transparent value at this pixel intersection
                # and we're still within the bounds of the watermark image
                if (	$watermark_x >= 0 && $watermark_x < $watermark_img_obj_w &&
                    $watermark_y >= 0 && $watermark_y < $watermark_img_obj_h ) {
                    $watermark_rbg = imagecolorsforindex( $watermark_img_obj, imagecolorat( $watermark_img_obj, $watermark_x, $watermark_y ) );

                    # using image alpha, and user specified alpha, calculate average
                    $watermark_alpha	= round( ( ( 127 - $watermark_rbg['alpha'] ) / 127 ), 2 );
                    $watermark_alpha	= $watermark_alpha * $alpha_level;

                    # calculate the color 'average' between the two - taking into account the specified alpha level
                    $avg_red		= $this->_get_ave_color( $main_rgb['red'],		$watermark_rbg['red'],		$watermark_alpha );
                    $avg_green	= $this->_get_ave_color( $main_rgb['green'],	$watermark_rbg['green'],	$watermark_alpha );
                    $avg_blue		= $this->_get_ave_color( $main_rgb['blue'],	$watermark_rbg['blue'],		$watermark_alpha );

                    # calculate a color index value using the average RGB values we've determined
                    $return_color	= $this->_get_image_color( $return_img, $avg_red, $avg_green, $avg_blue );

                    # if we're not dealing with an average color here, then let's just copy over the main color
                } else {
                    $return_color	= imagecolorat( $main_img_obj, $x, $y );

                } # END if watermark

                # draw the appropriate color onto the return image
                imagesetpixel( $return_img, $x, $y, $return_color );

            } # END for each X pixel
        } # END for each Y pixel

        # return the resulting, watermarked image for display
        return $return_img;

    } # END create_watermark()

    # average two colors given an alpha
    function _get_ave_color( $color_a, $color_b, $alpha_level ) {
        return round( ( ( $color_a * ( 1 - $alpha_level ) ) + ( $color_b	* $alpha_level ) ) );
    } # END _get_ave_color()

    # return closest pallette-color match for RGB values
    function _get_image_color($im, $r, $g, $b) {
        $c=imagecolorexact($im, $r, $g, $b);
        if ($c!=-1) return $c;
        $c=imagecolorallocate($im, $r, $g, $b);
        if ($c!=-1) return $c;
        return imagecolorclosest($im, $r, $g, $b);
    } # EBD _get_image_color()

}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!in_array($_FILES['picture']['type'], $types))
        die('<p>Запрещенный тип файла. <a href="?">Попробовать другой файл?</a></p>');
    if ($_FILES['picture']['size'] > $size)
        die('<p>Слишком большой размер файла. <a href="?">Попробовать другой файл?</a></p>');
    function resize($file, $type = 1, $rotate = null, $quality = null)
    {
        global $tmp_path;
        $max_thumb_size = $_POST['max_thumb_size'];
        $max_size = $_POST['max_size'];
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
        //$stamp = imagecreatefrompng('stamp.png');
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
  //          $w_dest = round($w_src / $ratio);
            $h_dest = round($h_src / $ratio);
//            $src = imagecreatetruecolor($w_src, $h_dest);
 //           imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_src, $h_dest, $w_dest, $h_src);
            /*

            imagedestroy($dest);
            imagedestroy($src);
            */
            $watermark = new watermark3();

//            $img = imagecreatefromjpeg("image.jpg");
            $water = imagecreatefrompng("watermark24.png");
            $dest=$watermark->create_watermark($src,$water,10);
            imagejpeg($dest, $tmp_path . $file['name'],$quality);
            imagedestroy($dest);
            imagedestroy($src);
            /*
            //112

            // Установка полей для штампа и получение высоты/ширины штампа
            $marge_right = 10;
            $marge_bottom = 10;
            $sx = imagesx($stamp);
            $sy = imagesy($stamp);

// Копирование изображения штампа на фотографию с помощью смещения края
// и ширины фотографии для расчета позиционирования штампа.
            imagecopy($src, $stamp, imagesx($src) - $sx - $marge_right,
                imagesy($src) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Вывод и освобождение памяти
            header('Content-type: image/png');
            imagepng($src);
            imagedestroy($src);

            return $file['name'];
        } else {
            imagejpeg($dest, $tmp_path . $file['name'], $quality);
            imagedestroy($src);
*/

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
    <input type="submit" value="Загрузить">
    <br>
    <label>Ограничение размера эскиза: </label>
    <input type="text" name="max_thumb_size">
    <br>
    <label>Ограничение размера большого изображения: </label>
    <input type="text" name="max_size">


</form>
</body>
</html>
