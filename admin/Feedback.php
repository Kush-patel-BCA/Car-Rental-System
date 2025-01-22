<?php
session_start();
error_reporting(0);
if (!$_SESSION['admin']) {
    header("location:admin-login.php");
}
include("../controller/connection.php");
$q = "select * from reviews,book_car where reviews.book_id=book_car.id";
$reviews = mysqli_query($con, $q);

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
        <div class="h-100">
            <?php include("AdminNavList.php"); ?>
        </div>
        <div id="maindash" class=" overflow-auto ">

            <?php include("Menu-bar.php"); ?>
            <div class='px-4 mt-4 '>
                <h4>Feedback From Customers</h4>
                <div class="container-fluid ">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gap-4">
                        <?php
                        while ($row = mysqli_fetch_array($reviews)) {
                            ?>
                            <div class="card border-light mb-3" style="max-width: 20vw;">
                                <div class="card-header">
                                    <div class='d-flex  align-items-center  gap-3'>

                                        <img src="../images/people/4.jpg" alt="" class="rounded-circle"
                                            style='width: 51px;'>

                                        <p class=''>
                                            <?php echo $row['fname'] . ' ' . $row['lname']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <div class='d-flex align-items-center  gap-2'>
                                            <?php
                                            for ($i = 1; $i <= 5; $i++) {
                                                ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="<?php if ($row['stars'] >= $i)
                                                        echo "#FD4";
                                                    else
                                                        echo '#fff'; ?>" stroke="<?php if ($row['stars'] >= $i)
                                                              echo "#FD4";
                                                          else
                                                              echo '#000'; ?>" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-star">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                </svg>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </h5>

                                    <p class="card-text  reviewinfo py-1">
                                        <?php echo $row['feedback']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
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
    <script>

    </script>
</body>

</html>