<?php
require_once 'db.php';
?>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<!-- //gallery -->
<div class="gallery" id="gallery">
    <!-- gallery -->
    <div class="container">
        <div class="wthree_title_agile">
            <h3>Our <span>Latest</span> Cars</h3>
        </div>
        <div class="inner_w3l_agile_grids">
            <?php
            $query_id = mysqli_query($link, "SELECT * FROM `gallery`");
            $gallery = array();
            while ($row = mysqli_fetch_assoc($query_id)) {
                $gallery[] = $row;
            }
            ?>
            <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                <?php foreach ($gallery as $photo): ?>
                <a href="#image-1">
                    <div class="nd-wrap nd-style-8">
                        <img src="/Lab15/css/images/<?= $photo['photo'] ?>" class="img-responsive" alt="<?= $photo['title'] ?>" />
                        <div class="nd-content">
                            <div class="nd-content inner">
                                <div class="nd-content innerl">
                                    <h4 class="nd-title"><?= $photo['title'] ?></h4>
                                    <span class="nd-icon">
                                        <i class="glyphicon glyphicon-link"></i>
                                    </span>
                                    <span class="nd-icon">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->
</html>
