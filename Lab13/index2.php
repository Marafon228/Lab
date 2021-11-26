<?php

require './session.php';

if (!empty($_REQUEST['cityname']) && !empty($_REQUEST['age'])) {
    $session = new Session;
    $session->set('city', $_REQUEST['cityname']);
    $session->set('age', $_REQUEST['age']);
}
else
{
    $session = new Session;
    $session->destroy();
}

?>

<form action="" method="GET">
    Город: <input type="text" name="cityname"> <br>
    Возраст: <input type="text" name="age"> <br>
    <input type="submit">
</form>
