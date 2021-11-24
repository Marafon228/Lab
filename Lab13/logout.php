<?php

session_start();
if (isset($_SESSION['city'])) {
    unset($_SESSION['city']);
}
if (isset($_SESSION['age'])) {
    unset($_SESSION['age']);
}

header('Location: /index2.php');
exit;

?>