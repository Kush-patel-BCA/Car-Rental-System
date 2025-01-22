<?php
session_start();
error_reporting(0);
if (isset ($_SESSION['admin'])) {
    header("location:index.php");
}
$message = "";
if (isset ($_REQUEST['submit'])) {
    extract($_POST);
    if ($username == "admin@123" && $password == "admin") {
        $_SESSION['admin'] = true;
        header("location:index.php");
    } else {
        $message = "Invalid Username or Password !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- Css Files -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="../css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="../css/plugins.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link id="colors" href="../css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link href="../css/coloring.css" rel="stylesheet" type="text/css">
    <style>
        .admin-login {
            height: 100vh;
            background: url("../images/background/4.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="admin-login">
        <div class="container py-5 h-100 " style="">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form id="adminLogin" method="post" class="card-body p-5 text-center">

                            <h2 class="mb-5">Admin Login</h2>

                            <div class="form-outline mb-4">
                                <input type="username" id="typeEmailX-2" class="form-control form-control-lg"
                                    name="username" />
                                <label class="form-label" for="typeEmailX-2">Username</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg"
                                    name="password" />
                                <label class="form-label" for="typePasswordX-2">Password</label>
                            </div>


                            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>

                            <p style="padding:0 1%; padding-top:4%;" class="text-danger h5">
                                <?php echo $message; ?>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="../js/plugins.js"></script>
    <script src="../js/designesia.js"></script>
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script src="../js/admin.js"></script>
</body>

</html>