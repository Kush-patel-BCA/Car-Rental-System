<?php
session_start();
error_reporting(0);
include ("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $userId = $_SESSION['userid'];
   $car = $_SESSION['car'];
   $carId = $car['id'];
   extract($_POST);
   $date1 = strtotime($_SESSION['pickupDate']);
   $date2 = strtotime($_SESSION['dropDate']);
   $diff = $date2 - $date1;
   $days = floor($diff / (60 * 60 * 24));
   $totalPrice = ceil($days * $car['price']);
   $pickUpDate = $_SESSION['pickupDate'];
   $dropDate = $_SESSION['dropDate'];
   $pickUpLocation = $_SESSION['pickupLocation'];
   $dropLocation = $_SESSION['dropLocation'];
   $q = "insert into book_car(fname,lname,email,phone,state,pincode,address,total_days,total_price,pickup_date,drop_date,pickup_location,drop_location,userId,carId) values('$fname','$lname','$email','$phone','$state',$scode,'$address',$days,'$totalPrice','$pickUpDate','$dropDate','$pickUpLocation','$dropLocation',$userId,$carId)";
   mysqli_query($con, $q);
   echo mysqli_insert_id($con) . "," . $totalPrice;
}
?>