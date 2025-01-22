<?php
$id = $_REQUEST['id'];
$val = $_REQUEST['val'];
include("connection.php");
include("../Mail.php");
$q = "update book_car set driver='$val' where id=$id";
mysqli_query($con, $q);

if ($val != 'none') {
    // User
    $userQuery = "select * from book_car where id=$id";
    $userSelect = mysqli_query($con, $userQuery);
    $user = mysqli_fetch_array($userSelect);
    $fullName = $user['fname'] . " " . $user['lname'];
    $userEmail = $user['email'];
    $pickUpLocation = $user['pickup_location'];
    $drop_location = $user['drop_location'];
    $pick_date = $user['pickup_date'];
    $drop_date = $user['drop_date'];
    $email = $user['email'];
    $phone = $user['phone'];
    // Driver
    $driverQuery = "select * from driver where d_name='$val'";
    $driverSelect = mysqli_query($con, $driverQuery);
    $driver = mysqli_fetch_array($driverSelect);
    $subForUser = "Driver Confirmed! Your Booked Trip Is Ready to Roll";
    $driverName = $driver['d_name'];
    $driverPhone = $driver['d_phone'];
    $driverEmail = $driver['d_email'];
    $driverSub = "Important Details for the Upcoming Trip";
    // Mail 
    $BodyForUser = <<<EOD
    <p>Hey $fullName,</p>

    <p>I'm thrilled to share some great news with you: your booked trip has been officially confirmed! Plus, I've got your driver details sorted out.</p>

    <p><strong>Here are your driver's details:</strong></p>
    <ul>
        <li><strong>Driver's Name:</strong> $driverName</li>
        <li><strong>Contact Number:</strong> $driverPhone</li>
    </ul>

    <p>We've processed your reservation, and everything is set for your upcoming adventure. Your selection was a standout, and we're excited to have you on board.</p>

    <p>Please take a moment to review the details of your booking and ensure everything is in order. If you have any questions or need assistance, don't hesitate to reach out.</p>

    <p>Congratulations on your confirmed booking! We're looking forward to an amazing journey together.</p>

    <p>Best regards,<br>
    Rentaly</p>
    EOD;


    MailSend($userEmail, $subForUser, $BodyForUser);

}
?>