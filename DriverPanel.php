<?php
session_start();
if (isset($_SESSION["driver"])) {
    include("controller/connection.php");
    $id = $_SESSION["driver"];
    $q = "select * from driver where id=$id";
    $driver = mysqli_query($con, $q);
    $mainData = mysqli_fetch_array($driver);


    // List
    $name = $mainData["d_name"];
    $q2 = "select * from book_car where driver='$name'";
    $select = mysqli_query($con, $q2);
} else {
    header("location:index.php");
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
                                <h1>Driver's Details</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <a href="index.php" class="d-flex align-content-center   mt-4 mx-4   gap-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
                <p style="font-size: 18px;color: #000;">Back To Side </p>
            </a>
            <?php include("components/InformationModal.php"); ?>

            <section aria-label="section">
                <div class="container">
                    <table class="table  ">
                        <thead style='background-color: #065708;font-size: 1rem;color:#fff'>
                            <tr>
                                <th>Order ID
                                </th>
                                <th>User Name
                                </th>
                                <th>Pick Up
                                    Location
                                </th>
                                <th>Drop Off
                                    Location</th>
                                <th>Pick Up Date
                                </th>
                                <th>Return Date
                                </th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($select)) {
                                while ($row = mysqli_fetch_array($select)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="badge bg-gray-100 text-dark">#
                                                <?php echo $row['id']; ?>
                                            </div>
                                        </td>
                                        <td><span class="bold">
                                                <?php echo $row['fname'] . ' ' . $row['lname']; ?>

                                        </td>
                                        <td>
                                            <?php echo $row['pickup_location']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['drop_location']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['pickup_date']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['drop_date']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            $Style = '';
                                            if ($row['status'] == 'Ontrip') {
                                                $Style = 'bg-secondary';
                                            } else if ($row['status'] == 'Success') {
                                                $Style = 'bg-success';
                                            } else if ($row['status'] == 'Cancel') {
                                                $Style = 'bg-danger';
                                            } else {
                                                $Style = 'bg-warning';
                                            }

                                            ?>
                                            <div class="badge rounded-pill   <?php echo $Style; ?> " style="font-size:0.7vw">
                                                <?php echo $row['status']; ?>
                                            </div>
                                        </td>
                                        <td class="text-center ">
                                            <div class=" py-1 text-light bg-success  rounded-5 infopage" style="cursor:pointer"
                                                data-info="<?php echo $row['id']; ?>">
                                                More Info</div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="8">
                                        <div class="d-flex  justify-content-center  align-items-center flex-column  w-100">
                                            <img src="./images/not_found.png" class="w-25 h-25" />
                                            <p style="font-size: 20px;">Record Not Found !</p>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>


    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/form.js"></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 12:43:59 GMT -->

</html>