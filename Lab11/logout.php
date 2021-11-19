<?php
session_start();

unset($_SESSION['login'], $_SESSION['id']);

header('Locaiton: index.php');
exit;
?>
