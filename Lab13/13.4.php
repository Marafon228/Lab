<?php
session_start();

if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

echo time() - $_SESSION['time'];
?>
