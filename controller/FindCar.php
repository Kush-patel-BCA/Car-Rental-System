<div class="row">
    <?php
    session_start();
    include("connection.php");
    extract($_POST);
    $_SESSION['pickupLocation'] = $PickupLocation;
    $_SESSION['dropLocation'] = $DropLocation;
    $_SESSION['pickupDate'] = $PickUpDate;
    $_SESSION['dropDate'] = $DropDate;
    $result_show = 3;
    $q = "select * from cars ";
    $search = mysqli_query($con, $q);
    $select = "select * from cars limit 0,3";
    $query = mysqli_query($con, $select);
    $totalCars = mysqli_num_rows($search);
    $totalPage = ceil($totalCars / $result_show);
    if ($query) {
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="col-lg-12">
                <div class="de-item-list mb30">
                    <div class="d-img">
                        <img src="<?php echo $data['image']; ?>" class="img-fluid" alt="" />
                    </div>
                    <div class="d-info">
                        <div class="d-text">
                            <h4>
                                <?php echo $data['name']; ?>
                            </h4>
                            <div class="d-atr-group">
                                <ul class="d-atr">
                                    <li><span>Seats:</span>
                                        <?php echo $data['seat']; ?>
                                    </li>
                                    <li><span>Luggage:</span>
                                        <?php echo $data['luggage']; ?>
                                    </li>
                                    <li><span>Doors:</span>
                                        <?php echo $data['doors']; ?>
                                    </li>
                                    <li><span>Fuel:</span>
                                        <?php echo $data['fuel_type']; ?>
                                    </li>
                                    <li><span>Body:</span>
                                        <?php echo $data['body']; ?>
                                    </li>
                                    <li><span>Engine:</span>
                                        <?php echo $data['engine']; ?>
                                    </li>
                                    <li><span>Drive:</span>
                                        <?php echo $data['drive'] = "4WD" ? "4WD" : "2WD"; ?>
                                    </li>
                                    <li><span>Transmission:</span>
                                        <?php echo $data['transmission']; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-price">
                        Daily rate from <span>₹
                            <?php echo $data['price']; ?>
                        </span>
                        <a class="btn-main" href="car-single.php?id=<?php echo $data["id"]; ?>">View Now</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <?php
    if ($query) {
        ?>
    </div>
    <div class="position-absolute bottom-10">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                for ($i = 1; $i <= $totalPage; $i++) {
                    ?>
                    <li class="page-item">
                        <a class="page-link <?php if ($i == 1)
                            echo "bg-success text-white"; ?> " href="?page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="?page=2" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php } ?>