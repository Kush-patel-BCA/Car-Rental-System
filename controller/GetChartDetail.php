<?php

header("Content-type: application/json");
include ("connection.php");
$q = "SELECT payment_status,COUNT(payment_status) as total FROM book_car GROUP BY payment_status";
$row = mysqli_query($con, $q);
$data = array(
    "complete" => 0,
    "pending" => 0,
    "cancel" => 0
); // Initialize an array with fixed fields and set them to 0

while ($result = mysqli_fetch_assoc($row)) {
    // Loop through each row of the result
    switch ($result['payment_status']) {
        case 'complete':
            $data['complete'] = $result['total'];
            break;
        case 'pending':
            $data['pending'] = $result['total'];
            break;
        case 'cancel':
            $data['cancel'] = $result['total'];
            break;
        default:
            // Handle unexpected payment_status values here, if needed
            break;
    }
}

// Convert the associative array to JSON format
$json_data = json_encode($data);

// Output the JSON data
echo $json_data;



?>