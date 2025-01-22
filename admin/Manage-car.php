<?php
session_start();
error_reporting(0);
include("../controller/connection.php");
$isUpdate = false;
if (!$_SESSION['admin']) {
    header("location:admin-login.php");
}
if (isset($_REQUEST["search"])) {
    extract($_POST);
    $url = 'location:Manage-car.php?id=' . $sid;
    $isUpdate = false;
    header($url);
}

if (isset($_REQUEST['update_car'])) {
    extract($_POST);
    $mainid = $_REQUEST['id'];
    $field = '';
    $fn = $_FILES['carimg'];
    if ($fn['name']) {
        $path = "../upload/" . $fn['name'];
        move_uploaded_file($_FILES['carimg']['tmp_name'], $path);
        $image = 'upload/' . $fn['name'];
        $field = ",image='$image'";
    }

    $q = "update cars set name='$fname',price=$price,description='$desc',body='$body',seat='$seat',doors=$doors,luggage='$luggage',fuel_type='$fuel_type',engine='$engine',year='$year',mileage='$mileage',drive='$drive' $field ,color='$color',transmission='$transmission'  where id=$mainid";
    mysqli_query($con, $q);
    $isUpdate = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="../images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website " name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- Css Files -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main-admin.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="../css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="../css/plugins.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link id="colors" href="../css/colors/scheme-01.css" rel="stylesheet" type="text/css">
    <link href="../css/coloring.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="admin">
        <?php include("Dialog.php"); ?>
        <div id="adminnavbar" class="h-100">
            <?php include("AdminNavList.php"); ?>
        </div>
        <div id="maindash" class=" overflow-auto ">
            <?php include("Menu-bar.php"); ?>
            <?php include("WarningModal.php"); ?>
            <?php if ($isUpdate) {
                ?>
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                <strong>Car Update Successfully !</strong> You should check in car section.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            }
            ?>
            <div class=' my-3 w-100 '>
                <div class='d-flex justify-content-center mb-3 '>
                    <div>
                        <p class='text-center bold ' style='font-size: 1.4vw;'>Car Manage</p>
                        <form class="input-group  main-search-input" method='post'>
                            <div class="form-outline" data-mdb-input-init>
                                <input id="search-focus" type="search" name='sid' value="<?php if ($_REQUEST['id'] and $isUpdate == false)
                                    echo $_REQUEST['id']; ?>" style="background-color:#fff;" class="form-control"
                                    placeholder="Search By Car Id..." autocomplete="off" onkeypress="return (event.charCode > 47 && 
        event.charCode < 58)" />
                                <label class="form-label" for="form1">Search</label>
                            </div>
                            <button type="submit" name='search' class='search-btn'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-search">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </button>
                        </form>



                    </div>

                </div>
                <!--Form Start  -->
                <?php
                if ($_REQUEST['id'] and !$isUpdate) {
                    $id = $_REQUEST['id'];
                    $q = "select * from cars where id=$id";
                    $select = mysqli_query($con, $q);
                    if (mysqli_num_rows($select)) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                <div class='px-4'>

                    <form class="row g-3  py-3 px-2 rounded-3 " style='background-color: #fff;' method='post'
                        enctype="multipart/form-data">
                        <div class="col-md-12 ">
                            <div>
                                <img src="../<?php echo $row['image']; ?>" class="w-25  h-25 object-fit-contain "
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <label class="form-label" for="customFile">Upload Image (If you want to Change
                                Image)</label>
                            <input type="file" name='carimg' id='carimg' class="form-control" id="customFile" />
                        </div>
                        <div class="col-md-4">
                            <label for="fname" class="form-label">Name</label>
                            <input type="text" class="form-control" name='fname' id="fname"
                                value="<?php echo $row['name']; ?>">
                        </div>
                        <div class=" col-md-4">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" value="<?php echo $row['price']; ?>" class="form-control" name="price"
                                id="price" onkeypress="return (event.charCode > 47 && 
        event.charCode < 58)">
                        </div>
                        <div class="col-md-4">
                            <label for="body" class="form-label">Body</label>
                            <input type="text" class="form-control" id="body" value="<?php echo $row['body']; ?>"
                                name='body'>
                        </div>
                        <div class=" col-12">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="desc" id="desc" class="form-control"
                                rows="5"><?php echo $row['description']; ?></textarea>

                        </div>
                        <div class="col-md-4">
                            <label for="seat" class="form-label">Seat</label>
                            <select id="seat" class="form-select" name='seat'>
                                <option>Choose Seat</option>
                                <option <?php if ($row['seat'] == '2') { ?> selected='selected' <?php } ?>>2</option>
                                <option <?php if ($row['seat'] == '5') { ?> selected='selected' <?php } ?>>5
                                </option>
                                <option <?php if ($row['seat'] == '7') { ?> selected='selected' <?php } ?>>7
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="doors" class="form-label">Doors</label>
                            <input type="text" value="<?php echo $row['doors']; ?>" class="form-control" id="doors"
                                name='doors' onkeypress="return (event.charCode > 47 && 
        event.charCode < 58)">
                        </div>
                        <div class="col-md-4">
                            <label for="engine" class="form-label">Engine</label>
                            <input type="text" class="form-control" value="<?php echo $row['engine']; ?>" id="engine"
                                name='engine'>
                        </div>
                        <div class="col-md-6">
                            <label for="luggage" class="form-label">Luggage</label>
                            <input type="text" class="form-control" id="luggage" value="<?php echo $row['luggage']; ?>"
                                name='luggage'>
                        </div>
                        <div class="col-md-6">
                            <label for="fuel_type" class="form-label">Fuel Type</label>
                            <input type="text" class="form-control" id="fuel_type"
                                value="<?php echo $row['fuel_type']; ?>" name='fuel_type'>
                        </div>
                        <div class="col-md-6">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" class="form-control" id="year" value="<?php echo $row['year']; ?>"
                                name='year' maxlength="4" onkeypress="return (event.charCode > 47 && 
        event.charCode < 58)">
                        </div>
                        <div class="col-md-6">
                            <label for="mileage" class="form-label">Mileage</label>
                            <input type="text" class="form-control" id="mileage" value="<?php echo $row['mileage']; ?>"
                                name='mileage' onkeypress="return (event.charCode > 47 && 
        event.charCode < 58)">
                        </div>
                        <div class="col-md-4">
                            <label for="drive" class="form-label">Drive</label> <input type="text" class="form-control"
                                id="drive" name='drive' value="<?php echo $row['drive']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="Color" class="form-label">Color</label> <input type="text" class="form-control"
                                id="Color" name='color' value="<?php echo $row['color']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="transmission" class="form-label">Transmission</label>
                            <input type=" text" class="form-control" id="transmission" name='transmission'
                                value="<?php echo $row['transmission']; ?>">
                        </div>
                        <div class="col-12">
                            <div class='d-flex align-items-center gap-3'>
                                <button type="submit" class="" name='update_car'
                                    style='background-color: #15161b;color:#fff;border:none;border-radius: 10px; padding: 7px 15px;'>Update
                                    Car</button>
                                <button type="button" id='warningbtn' name='add_car'
                                    data-car='<?php echo $row['id']; ?>'
                                    style='background-color: #FB2323;color:#fff;border:none;border-radius: 10px; padding: 7px 15px;'>Delete
                                    Car</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                        }
                    } else {
                        ?>
                <h2 class='text-center'>Car Not Found !</h2>
                <?php
                    }

                }
                ?>

                <!--Form End  -->
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../js/main-admin.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/designesia.js"></script>
    <script src='../../../www.google.com/recaptcha/api.js' async defer></script>
    <script>

    </script>
</body>

</html>