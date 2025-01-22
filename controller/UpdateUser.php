<?php 
    session_start();
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        $id = $_SESSION['userid'];
        $q = "update users set name='$name',username='$username',email='$email',mobile='$phone' where id=$id";
        $data = mysqli_query($con,$q);
        
    }
?>