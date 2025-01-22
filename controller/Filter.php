<div class="row">
    <?php
    session_start();
    include("connection.php");
    extract($_POST);
    $quertStringSeat = $_SESSION['SeatFilter'];
    $q = "";
    $mainQuery = "";
    $queryString = "";
    if ($body) {
        foreach ($body as $key => $item) {
            $main = $item['value'];
            if ($key == 0) {
                $queryString .= " body='$main' ";
            } else {
                $queryString .= " or body='$main' ";
            }
        }
        $_SESSION['bodyFilter'] = $queryString;
        $mainQuery = "where $queryString";
    } else {
        unset($_SESSION['bodyFilter']);
    }
    if ($quertStringSeat && $queryString) {
        $mainQuery = "select * from cars where ($quertStringSeat) and ($queryString)";
    } else if ($quertStringSeat) {
        $mainQuery = "select * from cars where $quertStringSeat";
    } else if ($queryString) {
        $mainQuery = "select * from cars where $queryString";
    } else {
        $mainQuery = "select * from cars  ";
    }
    $q = $mainQuery;
    $result_show = 3;
    $search = mysqli_query($con, $q);
    $select = "$mainQuery limit 0,3";
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
                        <a class="btn-main" href="car-single.php?id=<?php echo $data["id"]; ?>">Rent Now</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
if ($totalPage) {
    ?>
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
    <?php
} else {
    ?>
    <div class="d-flex  justify-content-center  align-items-center flex-column  w-100">
        <img src="./images/not_found.png" class="w-25 h-25" />
        <p style="font-size: 20px;">Car Not Found !</p>
    </div>
    <?php
}
?>