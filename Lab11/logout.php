<?php
session_start();

unset($_SESSION['login'], $_SESSION['id']);

header('Locaiton: Lab11/index.php');
exit;
?>
