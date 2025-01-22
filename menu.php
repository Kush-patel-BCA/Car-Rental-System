<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
include("utils/RemoveSession.php");
if ($_SESSION['userid']) {
    include("controller/connection.php");
    $q = "select * from users where id=" . $_SESSION['userid'];
    $Data = mysqli_query($con, $q);
    $result = mysqli_fetch_array($Data);
}
?>
<header class="transparent scroll-light has-topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="index.html">
                                    <img class="logo-1" src="images/logo-light.png" alt="">
                                    <img class="logo-2" src="images/logo.png" alt="">
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="index.php">Home</a></li>
                            <li><a class="menu-item" href="cars-list.php">Cars</a></li>
                            <li><a class="menu-item" href="about.php">About Us</a></li>
                            <li><a class="menu-item" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <?php
                            if ($_SESSION['userid']) {
                                ?>
                                <ul id="mainmenu">
                                    <li><a class="menu-item h5 text-capitalize" href="account.php">Hii ,
                                            <?php echo $result['name']; ?>
                                        </a></li>
                                </ul>
                                <?php
                            } else {
                                ?>
                                <a href="login.php" class="btn-main ">Sign In </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>