<?php 
    session_start();
    error_reporting(0);
    unset($_SESSION['admin']);
    header("location:admin-login.php");
?>