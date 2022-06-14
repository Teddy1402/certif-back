<?php

session_start();
session_unset();
session_destroy();
header('location: /certif-back/index.php');
?>

