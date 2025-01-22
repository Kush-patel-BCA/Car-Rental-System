<?php


include ("connection.php");

$id = $_REQUEST['id'];
$q = "update book_car set status='Cancel' where id=$id";

mysqli_query($con, $q);
header("location:../myorders.php")

    ?>