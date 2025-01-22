<?php
include("../controller/connection.php");
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}  
$results_per_page = 10;  
$page_first_result = ($page-1) * $results_per_page;  
$q = "select * from book_car";
$select = mysqli_query($con, $q);
$number_of_result = mysqli_num_rows($select); 
$number_of_page = ceil ($number_of_result / $results_per_page);  
$query = "select * from book_car limit " . $page_first_result . ',' . $results_per_page;  
$result = mysqli_query($con, $query);  
?>

<div class=" p-4 rounded-5 mb25 w-100">
    <h4>Books Detail</h4>
    <table class="table  de-table text-center ">
        <thead class='table-dark '>
            <tr>
                <th scope="col">
                    <span class="text-uppercase fs-12">ID</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Name</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Email</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Phone</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">State</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Pincode</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Total Price</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Address</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Status</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Driver</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Full Detail</span>
                </th>
            </tr>
        </thead>
        <tbody class='table-light '>
            <?php
            while ($data = mysqli_fetch_array($result)) {
               
                ?>
            <tr>
                <td>
                    <span class="d-lg-none d-sm-block">ID</span>
                    <div class="badge bg-gray-100 text-dark">#
                        <?php echo $data[0]; ?>
                    </div>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Name</span><span>
                        <?php echo $data['fname']. " ".$data['lname']; ?>
                    </span>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Email</span>
                    <?php echo $data['email']; ?>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Phone</span>
                    <?php echo $data['phone']; ?>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">State</span>
                    <?php echo $data['state']; ?>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Pincode</span>
                    <?php echo $data['pincode']; ?>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Total Price</span>
                    <?php echo $data['total_price']; ?>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block text-truncate" style="max-width: 150px;"">Address</span>
                    <?php echo $data['address']; ?>
                </td>
                <td>
                    <span class=" d-lg-none d-sm-block">Status</span>
                    <span>
                        <select name="" class='edit-item edit-status' data-id='<?php echo $data[0]; ?>'>
                            <option value="Success" <?php if ($data['status'] == 'Success') { ?> selected='selected'
                                <?php } ?>>Success
                            </option>
                            <option value="scheduled" <?php if ($data['status'] == 'scheduled') { ?> selected='selected'
                                <?php } ?>>Scheduled</option>
                            <option value="Ontrip" <?php if ($data['status'] == 'Ontrip') { ?> selected='selected'
                                <?php } ?>>OnTrip</option>
                            <option value="Cancel" <?php if ($data['status'] == 'Cancel') { ?> selected='selected'
                                <?php } ?>>
                                Cancel
                            </option>
                        </select>
                    </span>
                </td>
                <td>
                    <span class=" d-lg-none d-sm-block">Driver</span>
                    <?php
                        $q3 = "select * from  driver where status='approved'";
                        $selectData = mysqli_query($con,$q3);
                        
                    ?>
                    <span>
                        <select name="" id="editdriver" class='edit-item editdriver' data-id='<?php echo $data[0]; ?>'>
                            <option value="none">none</option>
                            <?php 
                            while ($row = mysqli_fetch_array($selectData)) {
                        ?>
                            <option value="<?php echo $row['d_name']; ?>"
                                <?php if ($data['driver'] == $row['d_name']) { ?> selected='selected' <?php } ?>>
                                <?php echo $row['d_name']; ?>
                            </option>
                            <?php
                        }
                        ?>
                        </select>
                    </span>
                </td>
                <td>
                    <span class="d-lg-none d-sm-block">Detail</span>
                    <svg class='book-info' style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"
                        data-id='<?php echo $data[0]; ?>'>
                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </td>

            </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <!-- Page Navigation -->
    <div class='pt-4'>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php 
                    if($page > 1) {
                        ?>
                <li class="page-item disabled ">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                    }
                    else{
                        ?>
                <li class="page-item disabled ">
                    <a class="page-link" href="Booked-cars.php?page=<?php echo $page-1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
                    }
                ?>

                <?php 
                    for ($i=1; $i <=$number_of_page; $i++) { 
                        ?>
                <li class="page-item"><a class="page-link"
                        href="Booked-cars.php?page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                <?php
                    }
                ?>
                <?php 
                
                    if($page>=$number_of_page){
                        ?>
                <li class="page-item  disabled ">
                    <a class="page-link" href="Booked-cars.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php
                    }
                    else{
                        ?>
                <li class="page-item   ">
                    <a class="page-link" href="Booked-cars.php?page=<?php echo $page+1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php
                    }
                
                ?>

            </ul>
        </nav>
    </div>
</div>