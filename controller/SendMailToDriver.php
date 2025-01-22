<?php
$id = $_REQUEST['id'];
include("connection.php");
include("../Mail.php");
$userQuery = "select * from book_car where id=$id";
$userSelect = mysqli_query($con, $userQuery);
$user = mysqli_fetch_array($userSelect);
$driverName = $user['driver'];
$driverQuery = "select * from driver where d_name='$driverName'";
$driverSelect = mysqli_query($con, $driverQuery);
$driver = mysqli_fetch_array($driverSelect);
$driverEmail = $driver["d_email"];
$fullName = $user['fname'] . " " . $user['lname'];
$pickUpLocation = $user['pickup_location'];
$drop_location = $user['drop_location'];
$pick_date = $user['pickup_date'];
$drop_date = $user['drop_date'];
$email = $user['email'];
$phone = $user['phone'];
$driverSub = "Important Details for the Upcoming Trip";
$BodyOfDriver = <<<EOD
<p>Dear $driverName</p>

<p>I hope this email finds you well. As we gear up for our upcoming trip, I wanted to ensure everyone has all the necessary details and information to make it a smooth and enjoyable experience for all.</p>

<strong>Client Name:</strong> $fullName<br>
<strong>Client Email:</strong> $email<br>
<strong>Client Phone:</strong> $phone</p>
<p><strong>PickUp Location:</strong> $pickUpLocation<br>
<p><strong>Destination Location:</strong> $drop_location<br>
<strong>Date of Departure:</strong> $pick_date<br>
<strong>Date of Return:</strong> $drop_date<br>

<p><strong>Important Points to Note:</strong></p>


<p>If you have any questions or require further clarification on any aspect of the trip, please don't hesitate to contact me or [Coordinator's Name] at [Coordinator's Contact Information].</p>

<p>Let's make this trip a memorable and enjoyable experience for everyone involved. Looking forward to exploring [Destination Name] together!</p>

<p>Best regards,<br>
Rentaly</p>
EOD;
MailSend($driverEmail, $driverSub, $BodyOfDriver);
?>