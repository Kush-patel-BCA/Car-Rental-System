<?php 
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    $q = "select * from users where username='$username' or email='$email'";
    $sel = mysqli_query($con,$q);
    if(mysqli_num_rows($sel)){
       echo 0;
    }
    else{
        $pwd= md5($password);
        $insert = "insert into users(name,email,username,mobile,password) values('$name','$email','$username','$phone','$pwd')";
        $q = mysqli_query($con,$insert);
        echo 1;
    }
}
?>