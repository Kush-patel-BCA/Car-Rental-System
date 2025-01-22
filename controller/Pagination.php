<?php 
    session_start();
    if(isset($_GET['page']) && isset($_SESSION['pickupDate']) && isset($_SESSION['dropDate'])){
        ?>
<div class="row">
    <?php 
        include("connection.php");
        $quertStringBody = $_SESSION['bodyFilter'];
        $quertStringSeat = $_SESSION['SeatFilter'];
        $result_show = 3;
        $page =   $_GET['page'];
        $pageNo = ceil($page - 1) * $result_show;
        $mainQuery ="";
        
        if($quertStringBody && $quertStringSeat){
            $mainQuery = "select * from cars where ($quertStringBody) and ($quertStringSeat)";
        }
        else if($quertStringBody){
            $mainQuery = "select * from cars where $quertStringBody";
        }
        else if($quertStringSeat){
            $mainQuery = "select * from cars where $quertStringSeat";
        }
        else{
            $mainQuery = "select * from cars  ";
        }
        $q = $mainQuery;
        $search = mysqli_query($con,$q);
        $select  = "$mainQuery limit $pageNo,$result_show";
        $query = mysqli_query($con,$select);
        $totalCars = mysqli_num_rows($search);
        $totalPage = ceil($totalCars/$result_show);
        if($query){
            while($data = mysqli_fetch_array($query)){
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
                                <?php echo $data['drive']="4WD" ?"4WD" :"2WD"; ?>
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
                    <?php echo $data['price'];?>
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
<div class="position-absolute bottom-10">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php 
                if($page!=1){
            ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php 
                }
            ?>
            <?php 
                for ($i=1; $i <=$totalPage; $i++) { 
            ?>
            <li class="page-item ">
                <a class="page-link <?php if($page==$i) echo "bg-success text-white"; ?> "
                    href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php 
                }
            ?>
            <?php 
                if($page!=$totalPage){
            ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $page+1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <?php 
                }
            ?>
        </ul>
    </nav>
</div>
<?php   
    }
   
?>