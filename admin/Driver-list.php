<?php
include("../controller/connection.php");
$q = "select * from driver";
$select = mysqli_query($con, $q);
?>
<div class=" p-4 rounded-5 mb25 w-100">
    <h4>All Users</h4>
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
                    <span class="text-uppercase fs-12">Status</span>
                </th>
                <th scope="col">
                    <span class="text-uppercase fs-12">Licence</span>
                </th>
            </tr>
        </thead>
        <tbody class='table-light '>
            <?php
            while ($data = mysqli_fetch_array($select)) {
                ?>
                <tr>
                    <td>
                        <span class="d-lg-none d-sm-block"> ID</span>
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
                        <span class="d-lg-none d-sm-block">Status</span>
                        <select name="" class='edit-item edit-status-driver' data-id='<?php echo $data[0]; ?>'>
                            <option value="pendding" <?php if ($data[5] == 'pendding') { ?> selected='selected' <?php } ?>>
                                pendding
                            </option>
                            <option value="approved" <?php if ($data[5] == 'approved') { ?> selected='selected' <?php } ?>>
                                Approved</option>
                            <option value="cancel" <?php if ($data[5] == 'cancel') { ?> selected='selected' <?php } ?>>
                                Cancel</option>

                        </select>
                    </td>
                    <td>
                        <span class="d-lg-none d-sm-block">Licence</span>
                        <span class='licence' data-img='<?php echo $data[4]; ?>'>
                            <svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image">
                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                <circle cx="9" cy="9" r="2" />
                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                            </svg>
                        </span>
                    </td>

                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>

</div>