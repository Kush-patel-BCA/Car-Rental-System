<?php include("utils/authverify.php"); ?>
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
    <link rel="stylesheet" href="css/main.css">
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
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Register</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h3>Don't have an account? Register now.</h3>
                            <p>Welcome to Rentaly. We're excited to have you on board. By creating an account with us,
                                you'll gain access to a range of benefits and convenient features that will enhance your
                                car rental experience.</p>

                            <div class="spacer-10"></div>

                            <form name="regiter" id='sign_up' class="form-border" method="post">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Name:</label>
                                            <input type='text' name='name' id='name' class="form-control">
                                        </div>
                                        <p id="valid">Please Enter Name </p>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='text' name='email' id='email' class="form-control">
                                            <p id="valid">Please Enter Email </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Choose a Username:</label>
                                            <input type='text' name='username' id='username' class="form-control">
                                            <p id="valid">Please Enter Username </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Phone:</label>
                                            <input type='text' name='phone' maxlength="10" id='phone'
                                                class="form-control" onkeypress="return (event.charCode >= 48 && 
    event.charCode < 58)">
                                        </div>
                                        <p id="valid">Please Enter Phone No </p>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='password' name='password' id='password' class="form-control">
                                            <p id="valid">Please Enter Password </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Confirm Password:</label>
                                            <input type='password' name='c-password' id='c-password'
                                                class="form-control">
                                            <p id="valid">Please Enter Confirm Password</p>
                                            <p id="valid">Password not match</p>
                                        </div>
                                    </div>


                                    <div class="col-md-12 pt-2">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' id='send_message' value='Register Now'
                                                class="btn-main color-2">
                                        </div>


                                    </div>
                                    <div id='main_success' class='success'>Your are register succssfullt,now you can
                                        login !</div>
                                    <div id='main_fail' class='error'>Sorry, </div>
                                    <div class="clearfix"></div>

                                </div>
                            </form>

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
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script src="js/authentication.js"></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 12:43:59 GMT -->

</html>