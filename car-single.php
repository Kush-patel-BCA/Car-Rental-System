<?php 
    session_start();
    if(isset($_REQUEST['id'])){
        $id =  $_REQUEST['id'];
        include("controller/connection.php");
        $select = "select * from cars where id=$id";
        $q = mysqli_query($con,$select);
        $data = mysqli_fetch_array($q);
        $_SESSION['car'] = $data;
    }
    else{
        header("location:car-list.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">

    <!-- Jquery Ui -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website " name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">


</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("menu.php"); ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Vehicle Fleet</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-car-details">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="image-section">
                                <div id="sigle-image">
                                    <img src="<?php echo $data['image']; ?>" alt="">
                                    <!-- <img src="images/car-single/1.jpg"  alt=""> -->
                                </div>
                                <div>
                                    <div class="de-price text-center">
                                        Daily rate
                                        <h3>₹<?php echo $data['price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <h3><?php echo $data['name']; ?></h3>
                            <p><?php echo $data['description']; ?></p>

                            <div class="spacer-10"></div>

                            <h4>Specifications</h4>
                            <div class="de-spec">
                                <div class="d-row">
                                    <span class="d-title">Body</span>
                                    <spam class="d-value"><?php echo $data['body']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Seat</span>
                                    <spam class="d-value"><?php echo $data['seat']; ?> Seat</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Door</span>
                                    <spam class="d-value"><?php echo $data['door']; ?> doors</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Luggage</span>
                                    <spam class="d-value"><?php echo $data['luggage']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Fuel Type</span>
                                    <spam class="d-value"><?php echo $data['fuel_type']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Engine</span>
                                    <spam class="d-value"><?php echo $data['engine']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Year</span>
                                    <spam class="d-value"><?php echo $data['year']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Mileage</span>
                                    <spam class="d-value"><?php echo $data['mileage']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Transmission</span>
                                    <spam class="d-value"><?php echo $data['transmission']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Drive</span>
                                    <spam class="d-value"><?php echo $data['drive']; ?></spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Color</span>
                                    <spam class="d-value"><?php echo $data['color']; ?></spam>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <h4>Features</h4>
                            <ul class="ul-style-2">
                                <li>Bluetooth</li>
                                <li>Multimedia Player</li>
                                <li>Central Lock</li>
                                <li>Sunroof</li>
                            </ul>
                        </div>

                        <div class="col-lg-3">

                            <div class="spacer-30"></div>
                            <div class="de-box mb25">
                                <form name="contactForm" id='contact_form' method="post">
                                    <h4>Booking this car</h4>

                                    <div class="spacer-20"></div>

                                    <div class="row">
                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Location</h5>
                                            <h4><?php echo $_SESSION['pickupLocation']; ?></h4>

                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Drop Off Location</h5>
                                            <h4><?php echo $_SESSION['dropLocation']; ?></h4>
                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Pick Up Date</h5>
                                            <h4><?php echo $_SESSION['pickupDate']; ?></h4>
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Return Date</h5>
                                            <h4><?php echo $_SESSION['dropDate']; ?></h4>
                                        </div>
                                        <div class="col-lg-12 mb20">
                                            <h5>Total Days </h5>
                                            <h4>
                                                <?php
                                                $date1 = strtotime($_SESSION['pickupDate']);
                                                $date2 = strtotime($_SESSION['dropDate']);
                                                $diff = $date2 - $date1;
                                                $days = floor($diff / (60 * 60 * 24));
                                                echo $days;  
                                            ?>
                                            </h4>
                                        </div>
                                        <div class="col-lg-12 mb20">
                                            <h5>Total Charge</h5>
                                            <h4>
                                                <?php
                                                echo ceil($days * $data['price']);  
                                            ?>
                                            </h4>
                                        </div>
                                    </div>

                                    <?php 
                                        if(isset($_SESSION['userid']))
                                        {
                                    ?>
                                    <a href="book-car.php" id='send_message' class="btn-main btn-fullwidth">Book Now</a>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <a href="login.php" class="btn-main ">Sign In </a>
                                    <?php
                                        }
                                    ?>

                                    <div class="clearfix"></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <?php include("footer.php"); ?>
        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->


    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/script.js"></script>

</body>

</html>