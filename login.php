<?php include("utils/authverify.php"); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">

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
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                    <h4>Login</h4>
                                    <div class="spacer-10"></div>
                                    <form name="login" id="login" class="form-border" method="POST">
                                        <div class="field-set">
                                            <input type="text" name="username" id="username" class="form-control"
                                                placeholder="Username" />
                                            <p id="valid" style="padding-left: 2px;">Please Enter Username</p>
                                        </div>
                                        <div class="field-set">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password" />
                                            <p id="valid" style="padding-left: 2px;">Please Enter Password</p>
                                        </div>
                                        <div id="submit">
                                            <input type="submit" id="send_message" value="Sign In"
                                                class="btn-main btn-fullwidth rounded-3" />
                                        </div>
                                        <p id="error_mess" class="d-none text-danger pt-4 px-5">Invalid Username or
                                            Password !</p>
                                    </form>
                                    <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;with</div>
                                    <div class="row g-2">
                                        <p align="center"><a href="register.php">Register</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->

        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/authentication.js"></script>

</body>

</html>