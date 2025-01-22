<?php
session_start();
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
    if ($username == 'driver') {
        $q1 = "select * from driver where d_email='$password' and status='approved'";
        $select = mysqli_query($con, $q1);
        if (mysqli_num_rows($select)) {
            $result = mysqli_fetch_array($select);
            $_SESSION['driver'] = $result[0];
            echo 'Driver';
        } else {
            echo true;
        }
    } else {
        $pwd = md5($password);
        $q = "select * from users where username='$username' and password='$pwd'";
        $data = mysqli_query($con, $q);
        if (mysqli_num_rows($data)) {
            $result = mysqli_fetch_array($data);
            $_SESSION["userid"] = $result[0];
        } else {
            echo true;
        }
    }
}
?>