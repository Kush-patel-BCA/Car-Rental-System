<?php 
        include("connection.php");
        $id = $_REQUEST['id'];
        $q = "select * from book_car,cars where book_car.carId=cars.id and book_car.id=$id";
        $select = mysqli_query($con,$q);
        $data = mysqli_fetch_array($select);        
?>
<div>
    <div class="d-flex justify-content-center  py-2">
        <img src="<?php echo $data['image']; ?>" alt="" class="shadow-sm  rounded-5">
    </div>
    <div class="de_tab_content">
        <div class="tab-1">
            <div class="row py-4  " style="margin : 0 0 0 1.5em;">
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline ">Car Name</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw"><?php echo $data['name']; ?>
                    </div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline ">Car Price</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['price']; ?>
                    </div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline ">Car Seat</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw"><?php echo $data['seat']; ?>
                    </div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> Name</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['fname'].' '.$data['lname']; ?></div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> Email</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['email']; ?></div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> Phone</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['phone']; ?></div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> State</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['state']; ?></div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> Pincode</h5>
                    <div class="font-weight-normal" style="font-size:0.8vw">
                        <?php echo $data['pincode']; ?></div>
                </div>
                <div class="col-lg-4 mb20">
                    <h5 class="nav-underline "> Address</h5>
                    <div class="font-weight-normal text-truncate" style="font-size:0.8vw">
                        <?php echo $data['address']; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>