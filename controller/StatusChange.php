<?php
$data = $_REQUEST['val'];
$id = $_REQUEST['id'];
include("connection.php");
$q = "update book_car set status='$data' where id=$id";
mysqli_query($con, $q);
?>