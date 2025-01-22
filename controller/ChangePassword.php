<?php
    session_start();
    error_reporting(0);
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        $id = $_SESSION['userid'];
        $oldPwd = md5($pwd);
        $q = "select * from users where password='$oldPwd'" ;
        $data = mysqli_query($con,$q);
        if(mysqli_num_rows($data)){
            $newPassword = md5($newpwd);
            $q1 = "update users set password='$newPassword' where id=$id";
            mysqli_query($con,$q1);
            echo 1;
        }
        else{
            echo 0;
        }
    }
?>