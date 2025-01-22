<?php 
  
    include("utils/checkUser.php"); 
    if($_SESSION['userid']){
        include("controller/connection.php");
        $id = $_SESSION['userid'];
        $q = "select * from users where id=$id";
        $main = mysqli_query($con,$q);
        $data = mysqli_fetch_array($main);

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website </title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website " name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">

    <link href="css/main.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
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
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Welcome <?php echo $data['name']; ?></h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <section id="account-section">
                <?php include("components/AccountMenu.php"); ?>

                <div class="container">
                    <div class="py-4">
                        <div id="user-profile" class="form-border p-4 rounded-5">
                            <div class="de_tab tab_simple">

                                <ul class="de_nav">
                                    <li class="active"><span>Profile</span></li>
                                </ul>

                                <div class="de_tab_content">
                                    <div class="tab-1">
                                        <div class="row">
                                            <div class="col-lg-6 mb20 py-2">
                                                <h5>Name</h5>
                                                <div><?php echo $data['name']; ?></div>
                                            </div>
                                            <div class="col-lg-6 mb20 py-2">
                                                <h5>Username</h5>
                                                <div>
                                                    <?php echo $data['username']; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb20 py-2">
                                                <h5>Email</h5>
                                                <div>
                                                    <?php echo $data['email']; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb20 py-2">
                                                <h5>Phone</h5>
                                                <div>
                                                    <?php echo $data['mobile']; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="d-flex align-items-center  gap-4 ">
                                <button type="button" class="btn btn-primary" id="up_modal">
                                    Update Profile
                                </button>
                                <button type="button" class="btn btn-primary px" id="chg_pwd">
                                    Change Password
                                </button>
                            </div>
                            <!-- Model -->
                            <?php include("components/UpdateProfile.php"); ?>
                            <?php include("components/ChangePassword.php"); ?>

                        </div>
                    </div>
                </div>


        </div>
        </section>
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
    <script src="js/form.js"></script>

</body>

</html>