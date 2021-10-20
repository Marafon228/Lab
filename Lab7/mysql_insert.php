<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = !empty($_POST['name']) ? $_POST['name'] : null;
    $lastname = !empty($_POST['lastname']) ? $_POST['lastname'] : null;
    $dol = !empty($_POST['dol']) ? $_POST['dol'] : null;
    if ($name && $lastname && $dol) {
        $db = mysqli_connect("localhost", "sdenisov", "dq7M7Z", "sdenisov_firstbd");
        $result = mysqli_query($db,"INSERT INTO firma (name, lastname, dol) VALUES ('{$name}', '{$lastname}', '{$dol}') ");
        if ($result == true)
            echo "Информация в базу добавлена успешно";
        else
            echo "Информация в базу не добавлена ";
}
}
?>