<?php
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    $q = "insert into reviews(stars,feedback,book_id) values($review,'$message',$bookid)";
    $r = mysqli_query($con, $q);
    echo 1;
}
?>