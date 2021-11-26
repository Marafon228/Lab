<?php

require './session.php';

if (!empty($_REQUEST['countryname'])) {
    $session = new Session;
    $session->set('country', $_REQUEST['countryname']);
    $session->set('curtime', mktime());
    $session->set('counter', 0);
    if (!empty($_REQUEST['email']))
    {
        $session->set('email', $_REQUEST['email']);
    }
    else
    {
        $session->set('email', '');
    }
}
else
{
    $session = new Session;
    $session->destroy();
}

?>


<form action="" method="GET">
    Страна: <input type="text" name="countryname"> <br>
    Email: <input type="text" name="email"> <br>
    <input type="submit">
</form>