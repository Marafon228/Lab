<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fio = !empty($_POST['fio']) ? $_POST['fio'] : null;
    $propuski = !empty($_POST['propuski']) ? $_POST['propuski'] : null;
    $sr_reyting = !empty($_POST['sr_reyting']) ? $_POST['sr_reyting'] : null;
    if ($fio && $propuski && $sr_reyting) {
        $db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_group");
        $result = mysqli_query($db,"INSERT INTO uspevaemost (fio, propuski, sr_reyting) VALUES ('{$fio}', '{$propuski}', '{$sr_reyting}') ");
    }
}
?>
