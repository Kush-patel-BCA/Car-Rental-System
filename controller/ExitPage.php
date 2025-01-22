<?php   
    session_start();
    unset($_SESSION['userid']);
    header("location:http://localhost/reant/index.php");
?>