<?php
// error_reporting(0);
error_reporting(0);
include ("../controller/connection.php");
session_start();
if (!$_SESSION['admin']) {
    header("location:admin-login.php");
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <div class="admin">
        <?php include ("Dialog.php"); ?>
        <div class="h-100">
            <?php include ("AdminNavList.php"); ?>
        </div>
        <div id="maindash" class=" overflow-auto ">

            <?php include ("Menu-bar.php"); ?>
            <div class='px-4 mt-4 '>

                <div class="mb-4 d-flex justify-content-start ">
                    <canvas id="myPieChart" width="300" height="300"></canvas>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5 ">
                            <div class="symbol mb40">
                                <i class="fa id-color fa-2x fa-calendar-check-o"></i>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_book from book_car");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_book'] . "</span>";
                            ?>
                            <span class="text-gray">Total Orders</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users-2 text-success">
                                    <path d="M14 19a6 6 0 0 0-12 0" />
                                    <circle cx="8" cy="9" r="4" />
                                    <path d="M22 19a6 6 0 0 0-6-6 4 4 0 1 0 0-8" />
                                </svg>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_user from users");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_user'] . "</span>";
                            ?>

                            <span class="text-gray">Total Users</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                    fill="none" stroke="#1ECB15" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-star">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_review from reviews");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_review'] . "</span>";
                            ?>

                            <span class="text-gray">Total Reviews</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <i class="fa id-color fa-2x fa-calendar-times-o"></i>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_cancel from book_car where payment_status='cancel'");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_cancel'] . "</span>";
                            ?>
                            <span class="text-gray">Cancel Orders</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-car-front text-success">
                                    <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
                                    <path d="M7 14h.01" />
                                    <path d="M17 14h.01" />
                                    <rect width="18" height="8" x="3" y="10" rx="2" />
                                    <path d="M5 18v2" />
                                    <path d="M19 18v2" />
                                </svg>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_car from cars");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_car'] . "</span>";
                            ?>

                            <span class="text-gray">Total Cars</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-contact-2 text-success">
                                    <path d="M16 18a4 4 0 0 0-8 0" />
                                    <circle cx="12" cy="11" r="3" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <line x1="8" x2="8" y1="2" y2="4" />
                                    <line x1="16" x2="16" y1="2" y2="4" />
                                </svg>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_contact from contact_us");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_contact'] . "</span>";
                            ?>

                            <span class="text-gray">Contact Users</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mb25 order-sm-1">
                        <div class="card p-4 rounded-5">
                            <div class="symbol mb40">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-key-square text-success">
                                    <path
                                        d="M12.4 2.7c.9-.9 2.5-.9 3.4 0l5.5 5.5c.9.9.9 2.5 0 3.4l-3.7 3.7c-.9.9-2.5.9-3.4 0L8.7 9.8c-.9-.9-.9-2.5 0-3.4Z" />
                                    <path d="m14 7 3 3" />
                                    <path d="M9.4 10.6 2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4" />
                                </svg>
                            </div>
                            <?php

                            $order = mysqli_query($con, "select count(*) as total_driver from driver");
                            $orders = mysqli_fetch_array($order);

                            echo "<span class='h1 mb0'>" . $orders['total_driver'] . "</span>";
                            ?>

                            <span class="text-gray">Total Drivers</span>
                        </div>
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
    <script src="../js/Chart.js"></script>
    </script>
</body>

</html>