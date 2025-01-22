<?php
session_start();
error_reporting(0);
$isAdd = false;
if (!$_SESSION['admin']) {
    header("location:admin-login.php");
}
if (isset($_REQUEST['add_car'])) {
    include('../controller/connection.php');
    extract($_POST);
    $fn = $_FILES['driver_img']['name'];
    $path = "../upload/" . $fn;
    move_uploaded_file($_FILES['driver_img']['tmp_name'], $path);

    $q = "insert into driver(d_name,d_email,d_phone,d_licence) values('$fname','$email','$phone','upload/$fn')";
    mysqli_query($con, $q);
    $isAdd = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website " name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- Css Files -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main-admin.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="../css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="../css/plugins.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link id="colors" href="../css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link href="../css/coloring.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="admin">
        <?php include("Dialog.php"); ?>
        <div id="adminnavbar" class="h-100">
            <?php include("AdminNavList.php"); ?>
        </div>
        <div id="maindash" class=" overflow-auto ">
            <?php include("Menu-bar.php"); ?>
            <!-- Form Start -->
            <?php

            if ($isAdd) {

                ?>
            <div class='mx-3 mt-2'>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Car Add Successfully !</strong> You should check in car section.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="px-4 my-4  ">
                <form class="row g-3 mt-5  py-3 px-2 rounded-3 w-75  mx-auto " style='background-color: #fff;'
                    method='post' enctype="multipart/form-data">
                    <h3 class="px-4 my-4 pb-3">Add Driver </h3>
                    <div class="col-md-12 ">
                        <label class="form-label" for="customFile">Upload Drive Linaces Image</label>
                        <input type="file" name='driver_img' id='driver_img' class="form-control" id="customFile" />
                    </div>
                    <div class="col-md-12">
                        <label for="fname" class="form-label">Driver Name</label>
                        <input type="text" class="form-control" name='fname' id="fname">
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Driver Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-12">
                        <label for="phone" class="form-label">Driver Phone</label>
                        <input type="text" class="form-control" id="phone" name='phone' maxlength="10" onkeypress="return (event.charCode > 47 && 
    event.charCode < 58)">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="" name='add_car'
                            style='background-color: #15161b;color:#fff;border:none;border-radius: 10px; padding: 7px 15px;'>Upload
                            Driver</button>
                    </div>
                </form>
            </div>
            <!-- Form End -->
        </div>
    </div>
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../js/main-admin.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/designesia.js"></script>
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>

</body>

</html>