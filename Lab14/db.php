<?php
$config = require_once 'config.php';
$link = mysqli_connect($config['host'], $config['user'], $config['pass'], $config['base']);
unset($config);