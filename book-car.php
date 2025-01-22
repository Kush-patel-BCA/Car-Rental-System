<?php
session_start();
error_reporting(0);
include ("utils/autverify.php");
$car = $_SESSION['car'];
if (!$car) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include ("menu.php"); ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Book Car</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->





            <div class="no-bottom no-top" id="content">
                <div id="top"></div>


                <!-- section close -->


                <section aria-label="section">
                    <div class="container ">
                        <div class="d-flex gap-5  justify-content-center  ">

                            <div class="col-lg-8 mb-sm-30 ">
                                <div class="d-flex justify-content-center align-items-center  h-100 d-none"
                                    id="loader-form">
                                    <div class="spinner-border text-success " role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                <?php include ('components/BookForm.php'); ?>
                            </div>
                            <div class=" p-4  w-100  car-d  ">
                                <div class="d-img">
                                    <img src="<?php echo $car['image']; ?>" class="img-fluid rounded-2 " alt="" />
                                </div>
                                <div class="row">
                                    <div class="col mt-4  ">
                                        <h5>Total Days</h5>
                                        <p>
                                            <?php
                                            $date1 = strtotime($_SESSION['pickupDate']);
                                            $date2 = strtotime($_SESSION['dropDate']);
                                            $diff = $date2 - $date1;
                                            $days = floor($diff / (60 * 60 * 24));
                                            echo $days;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col mt-4  ">
                                        <h5>Per Day's Price</h5>
                                        <p>
                                            <?php echo $car['price']; ?>
                                        </p>
                                    </div>
                                    <div></div>
                                    <div class="col">
                                        <h5>Total Price</h5>
                                        <p>
                                            <?php
                                            echo ceil($days * $car['price']);
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <h5>Body Type </h5>
                                        <p>
                                            <?php
                                            echo $car['body'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </section>

            </div>
            <!-- content close -->

            <a href="#" id="back-to-top"></a>



        </div>
        <!-- content close -->



        <!-- footer begin -->
        <?php include ("footer.php"); ?>
        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/book-car.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>

</body>


</html>