<?php

include ("utils/checkUser.php");
if ($_SESSION['userid']) {
    include ("controller/connection.php");
    $id = $_SESSION['userid'];
    $q = "select book_car.*,driver.d_name,driver.d_phone,reviews.stars from book_car left join driver on book_car.driver=driver.d_name left join reviews on book_car.id=reviews.book_id where book_car.userId=$id ";
    $main = mysqli_query($con, $q);

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
                                <h1>My Orders
                                </h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            <section id="account-section">
                <?php include ("components/AccountMenu.php"); ?>
                <?php include ("components/InformationModal.php"); ?>
                <?php include ("components/ReviewModal.php"); ?>
                <div class="container">
                    <div class="px-2 py-4 mt-4 rounded-5 shadow-sm " id="user-profile">
                        <h4 class="my-3 px-4">My Orders</h4>
                        <div>
                            <table class="table de-table">
                                <thead>
                                    <tr class="text-center ">
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Order ID</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">User Name</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up
                                                Location</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Drop Off
                                                Location</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Pick Up Date</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Return Date</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Driver</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Driver
                                                Contact</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Total Price</span>
                                        </th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Status</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Detail</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Review</span></th>
                                        <th scope="col"><span class="text-uppercase fs-12 text-gray">Edit</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($data = mysqli_fetch_array($main)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><span class="d-lg-none d-sm-block">Order ID</span>
                                                <div class="badge bg-gray-100 text-dark">#
                                                    <?php echo $data['id']; ?>
                                                </div>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">User Name</span><span class="bold">
                                                    <?php echo $data['fname'] . ' ' . $data['lname']; ?>
                                                </span>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Pick Up
                                                    Location</span>
                                                <?php echo $data['pickup_location']; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Drop Off
                                                    Location</span>
                                                <?php echo $data['drop_location']; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Pick Up
                                                    Date</span>
                                                <?php echo $data['pickup_date']; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Return
                                                    Date</span>
                                                <?php echo $data['drop_date']; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Driver
                                                </span>
                                                <?php echo $data['d_name'] ? $data['d_name'] : "-"; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Driver Contact
                                                </span>
                                                <?php echo $data['d_phone'] ? $data['d_phone'] : "-"; ?>
                                            </td>
                                            <td><span class="d-lg-none d-sm-block">Total Price
                                                </span>
                                                <?php echo $data['total_price'] ? $data['total_price'] : "-"; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $Style = '';
                                                if ($data['status'] == 'Ontrip') {
                                                    $Style = 'bg-secondary';
                                                } else if ($data['status'] == 'Success') {
                                                    $Style = 'bg-success';
                                                } else if ($data['status'] == 'Cancel') {
                                                    $Style = 'bg-danger';
                                                } else {
                                                    $Style = 'bg-warning';
                                                }

                                                ?>
                                                <div class="badge rounded-pill   <?php echo $Style; ?> "
                                                    style=" font-size:0.7vw">
                                                    <?php echo $data['status']; ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" py-1 text-light bg-success  rounded-5 infopage"
                                                    style="cursor:pointer" data-info="<?php echo $data['id']; ?>">
                                                    More Info</div>
                                            </td>
                                            <td>
                                                <?php

                                                if ($data['status'] == 'Success') {
                                                    if ($data['stars']) {
                                                        ?>
                                                        <div class='d-flex align-items-center  justify-content-center '>
                                                            <span style='font-size: 0.8vw;' class='bold'>
                                                                <?php echo $data['stars']; ?>
                                                            </span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                id='reviewstar' viewBox=" 0 0 24 24" fill="#FD4" stroke="#FD4"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                            </svg>
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>

                                                        <div id='reviewBox' data-id='<?php echo $data[0]; ?>'>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                id='reviewstar' viewBox=" 0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="lucide lucide-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                                            </svg>
                                                        </div>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class='px-4'>-</div>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php

                                                if ($data['status'] == "scheduled") {

                                                    ?>
                                                    <a href="Controller/CancelOrder.php?id=<?php echo $data[0]; ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="#F0544E" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-circle-x">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <path d="m15 9-6 6" />
                                                            <path d="m9 9 6 6" />
                                                        </svg>
                                                    </a>
                                                <?php } else
                                                    echo "-"; ?>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        </section>
        <!-- content close -->

        <a href=" #" id="back-to-top"></a>

        <!-- footer begin -->
        <?php include ("footer.php"); ?>
        <!-- footer close -->

    </div>

    <!-- Javascript Files
    ================================================== -->

    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/form.js"></script>

</body>

</html>