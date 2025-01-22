<?php
include("../controller/connection.php");
error_reporting(0);
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$results_per_page = 5;
$page_first_result = ($page - 1) * $results_per_page;
$q = "select * from cars";
$select = mysqli_query($con, $q);
$number_of_result = mysqli_num_rows($select);
$number_of_page = ceil($number_of_result / $results_per_page);
$query = "select * from cars limit " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $query);

?>
<div class=" p-4 rounded-5 mb25 w-100">
    <h4>Cars </h4>

    <table class="table de-table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">ID</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Car</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Name</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Price</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Description</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Body</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Seat</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Color</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Fuel Type</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12 ">Engine</span>
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
                            <?php echo $data['id']; ?>
                        </div>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Car</span>
                        <span><img id="carimage" src="../<?php echo $data['image']; ?>" /></span>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Name</span>
                        <?php echo $data['name']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Price</span>
                        <?php echo $data['price']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Description</span>
                        <span class="d-inline-block text-truncate" style="max-width: 150px;">
                            <?php echo $data['description']; ?>
                        </span>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Body</span>
                        <?php echo $data['body']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Seat</span>
                        <?php echo $data['seat']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Color</span>
                        <?php echo $data['color']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Body</span>
                        <?php echo $data['fuel_type']; ?>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Body</span>
                        <?php echo $data['engine']; ?>
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class='pt-4'>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php

                if ($page > 1) {
                    ?>
                    <li class="page-item  ">
                        <a class="page-link" href="Cars.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="page-item disabled  ">
                        <a class="page-link" href="Cars.php?page=<?php echo $page; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
                }
                ?>

                <?php
                for ($i = 1; $i <= $number_of_page; $i++) {
                    ?>
                    <li class="page-item"><a class="page-link" href="Cars.php?page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a></li>
                    <?php
                }
                ?>
                <?php

                if ($page >= $number_of_page) {
                    ?>
                    <li class="page-item  disabled ">
                        <a class="page-link" href="Cars.php" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="page-item   ">
                        <a class="page-link" href="Cars.php?page=<?php echo $page + 1; ?>" aria-label="Next">
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