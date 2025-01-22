<?php
include ("../controller/connection.php");
$q = "select * from users";
$select = mysqli_query($con, $q);
?>
<div class=" p-4 rounded-5 mb25 w-100">
    <h4>All Users</h4>
    <table class=" table de-table text-center ">
        <thead class='table-dark '>
            <tr>
                <th scope=" col">
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
            </tr>
        </thead>
        <tbody class='table-light '>
            <?php
            while ($data = mysqli_fetch_array($select)) {
                ?>
                <tr>
                    <td>
                        <span class="d-lg-none d-sm-block">Order ID</span>
                        <div class="badge bg-gray-100 text-dark">#
                            <?php echo $data[0]; ?>
                        </div>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Car Name</span><span>
                            <?php echo $data[1]; ?>
                        </span>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Pick Up Location</span>
                        <?php echo $data[2]; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Drop Off Location</span>
                        <?php echo $data[3]; ?>
                    </td>

                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>

</div>