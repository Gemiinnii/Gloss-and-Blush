<?php
session_start();
$_SESSION = array();
// print_r($_SESSION);
// die();
header('Location: ../index.php');
?>