<?php
$id = $_REQUEST['id'];

include ("connection.php");

$q = "SELECT book_car.id, book_car.driver,book_car.payment_status,book_car.status,cars.*  FROM book_car INNER JOIN cars ON book_car.carId=cars.id WHERE book_car.id = $id";

$row = mysqli_query($con, $q);

$data = mysqli_fetch_array($row);



?>

<div class="d-flex justify-content-center  align-items-center ">
    <img src="../<?php echo $data['image']; ?>" class="w-25  h-25  img-fluid " alt="">
</div>
<div class="row mt-4 px-3 ">
    <div class="col-md-6 p-2">
        <input type="text" placeholder="<?php echo $data['name']; ?>" class="form-control" id="customFile" disabled />
    </div>
    <div class="col-md-6 p-2">
        <input type="text" placeholder="Per Day Price :<?php echo $data['price']; ?>" class="form-control"
            id="customFile" disabled />
    </div>
    <div class="col-md-6 p-2">
        <input type="text" placeholder="<?php echo $data['fuel_type']; ?> " class="form-control" id="customFile"
            disabled />
    </div>
    <div class="col-md-6 p-2">
        <input type="text" placeholder="<?php echo $data['body']; ?>  " class="form-control" id="customFile" disabled />
    </div>
</div>
<hr class="py-0" />
<?php

if ($data['driver'] != "none") {
    $name = $data['driver'];
    $q2 = "select * from driver where d_name='$name'";
    $row2 = mysqli_query($con, $q2);
    $result = mysqli_fetch_array($row2);
    ?>
    <p class="px-3">Driver Detail</p>
    <div class="row px-3 ">
        <div class="col-md-12 p-2">
            <input type="text" placeholder="<?php echo $result['d_name']; ?> " class="form-control" id="customFile"
                disabled />
        </div>

        <div class="col-md-6 p-2">
            <input type="text" placeholder="<?php echo $result['d_email']; ?>" class="form-control" id="customFile"
                disabled />
        </div>
        <div class="col-md-6 p-2">
            <input type="text" placeholder="<?php echo $result['d_phone']; ?>" class="form-control" id="customFile"
                disabled />
        </div>

    </div>
    <?php
}
?>

<div class="row px-3">
    <div class="col-md-6">
        <div>
            <p class="title">Payment Status</p>
            <?php
            if ($data['payment_status'] == "complete") {
                echo '<button class="badges_button green px-4">Complete</button>';
            } elseif ($data['payment_status'] == "pending") {
                echo '<button class="badges_button yellow px-4">Pending</button>';
            } else {
                echo '<button class="badges_button red px-4">Cancel</button>';
            }
            ?>

        </div>

    </div>
    <div class="col-md-6">
        <div>
            <p class="title">Order Status</p>
            <?php
            if ($data['status'] == "complete") {
                echo '<button class="badges_button green px-4">Complete</button>';
            } elseif ($data['status'] == "pending") {
                echo '<button class="badges_button yellow px-4">Pending</button>';
            } elseif ($data['status'] == "Ontrip") {
                echo '<button class="badges_button blue px-4">OnTrip</button>';
            } else {
                echo '<button class="badges_button red px-4">Cancel</button>';
            }
            ?>
        </div>

    </div>
</div>

</div>