<div class=" p-4 rounded-5 mb25 w-100">
    <?php
    include("../controller/connection.php");
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    $results_per_page = 10;
    $page_first_result = ($page - 1) * $results_per_page;
    $q = "select * from contact_us";
    $select = mysqli_query($con, $q);
    $number_of_result = mysqli_num_rows($select);
    $number_of_page = ceil($number_of_result / $results_per_page);
    $query = "select * from contact_us limit " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($con, $query);
    ?>

    <div class=" p-4 rounded-5 mb25 w-100">
        <h4>Contact Details</h4>
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
                        <span class="text-uppercase fs-12">Message</span>
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
                                <?php echo $data[1]; ?>
                            </span>
                        </td>
                        <td>
                            <span class="d-lg-none d-sm-block">Email</span>
                            <?php echo $data[2]; ?>
                        </td>
                        <td>
                            <span class="d-lg-none d-sm-block">Phone</span>
                            <?php echo $data[3]; ?>
                        </td>
                        <td>
                            <span class="d-lg-none d-sm-block  text-truncate">Message</span>
                            <?php echo $data[4]; ?>
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
                    if ($page > 1) {
                        ?>
                        <li class="page-item disabled ">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="page-item disabled ">
                            <a class="page-link" href="Booked-cars.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                    }
                    ?>

                    <?php
                    for ($i = 1; $i <= $number_of_page; $i++) {
                        ?>
                        <li class="page-item"><a class="page-link" href="Booked-cars.php?page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a></li>
                        <?php
                    }
                    ?>
                    <?php

                    if ($page >= $number_of_page) {
                        ?>
                        <li class="page-item  disabled ">
                            <a class="page-link" href="Booked-cars.php" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="page-item   ">
                            <a class="page-link" href="Booked-cars.php?page=<?php echo $page + 1; ?>" aria-label="Next">
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

</div>