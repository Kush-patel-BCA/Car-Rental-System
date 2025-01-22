<?php 
    session_start();
    $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="eng">


<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16" />
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
    <link href="css/coloring.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="Stylesheet"
        href="http://ajax.microsoft.com/ajax/jquery.ui/1.8.6/themes/smoothness/jquery-ui.css" />
</head>

<body>
    <div id="wrapper">
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("menu.php");?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <?php include("CarHeader.php"); ?>
            <!-- section close -->

            <section id="section-cars" class="">
                <div class="container">
                    <div class="row">
                        <!-- Filters -->
                        <div class="col-lg-3  <?php if(!isset($_GET['page'])){ echo "d-none";} ?>" id="filter">


                            <div class="item_filter_group">
                                <h4>Car Body Type</h4>
                                <div class="de_form">
                                    <?php 
                                            include("controller/connection.php");
                                            $query = "select body from cars group by body";
                                            $data = mysqli_query($con,$query);
                                            $no = 0;
                                            while($result = mysqli_fetch_array($data)){
                                                $no+=1;
                                    ?>
                                    <div class="de_checkbox">
                                        <input id="car_body_type_<?php echo $no; ?>" name="car_body[]" type="checkbox"
                                            class="carBody" value="<?php echo $result['body']; ?>" />
                                        <label
                                            for="car_body_type_<?php echo $no; ?>"><?php echo $result['body']; ?></label>
                                    </div>
                                    <?php
                                            }
                                    ?>
                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Seats</h4>
                                <div class="de_form">
                                    <?php 
                                            include("controller/connection.php");
                                            $query = "select seat from cars group by seat";
                                            $data = mysqli_query($con,$query);
                                            $no = 0;
                                            while($result = mysqli_fetch_array($data)){
                                                $no+=1;
                                    ?>
                                    <div class="de_checkbox">
                                        <input id="car_seat<?php echo $no; ?>" name="car_seat[]" type="checkbox"
                                            class="carSeat" value="<?php echo $result['seat']; ?>" />
                                        <label for="car_seat<?php echo $no; ?>"><?php echo $result['seat']; ?></label>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-9 position-relative" id="addcars">
                            <!-- Car List -->
                            <div class="row">
                                <?php 
                                    if(!isset($_GET['page'])){
                                ?>
                                <div class="d-flex justify-content-center align-content-center ">
                                    <h3 style="margin-left:22rem;">Before Book Please Enter Information...</h3>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                            <?php include("controller/pagination.php"); ?>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.6/jquery-ui.min.js"></script>
    <script src="js/Cars.js"></script>

</body>

</html>