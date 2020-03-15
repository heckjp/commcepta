<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
isset($_SESSION['user']) ? header('Location:home.php') : header('Location:login.php');

?>