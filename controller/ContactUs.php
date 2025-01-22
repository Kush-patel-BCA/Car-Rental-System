<?php 
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);
            $q = "insert into contact_us(name,email,phone,message) values('$name','$email','$phone','$message')";
            $data = mysqli_query($con,$q);
            if($data)
                echo 1;
            else
                echo 0;            
    }
?>