<?php

if ($_REQUEST['id']) {
    $id = $_REQUEST['id'];
    include("connection.php");
    $q = "delete from cars where id=$id";
    mysqli_query($con, $q);
}

?>