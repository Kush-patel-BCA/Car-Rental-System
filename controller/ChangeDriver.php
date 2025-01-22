<?php
include('../Mail.php');
$id = $_REQUEST['id'];
$val = $_REQUEST['val'];
include("connection.php");
$q = "update driver set status='$val' where id=$id";
$main = mysqli_query($con, $q);
if ($main) {
    $q1 = "select * from driver where  id=$id";
    $select = mysqli_query($con, $q1);
    $result = mysqli_fetch_array($select);
    if ($val == 'approved') {
        $name = $result['d_name'];
        $email = $result['d_email'];
        $sub = 'Welcome to the Team!';
        $mainContent = <<<EOD
        <p>
        Dear $name,
        </p>
    
        <p>
        Congratulations on joining the Rentaly team! We're excited to have you with us and believe your experience will be invaluable to our success.
        </p>
        <p>
        Your expertise will play a crucial role in delivering top-notch service to our customers and driving our company forward. We're here to support you as you settle into your new role.
        </p>
        <p>
        As part of our team, you'll be responsible for managing bookings, ensuring our customers have seamless experiences from reservation to return. Your unique driver ID, which will grant you access to our booking system, is #$id. Please use this ID along with your login credentials to access the necessary tools.
        </p>
        <p>
        To access your booking information and other relevant tools, please use the login credentials provided to you. If you haven't received your login details yet, please reach out to your supervisor or the IT department for assistance.
        </p>
        <p>
        Welcome aboard!
        </p>
        <p>
        Best regards,
        </p>
    Car Rentaly

    EOD;
        MailSend($email, $sub, $mainContent);
    }
    if ($val == 'cancel') {
        $name = $result['d_name'];
        $email = $result['d_email'];
        $sub = "Rejection Notification: Driver Position Application";
        $mainContent = <<<EOD
        <p>Dear $name</p>
        <p>I hope this email finds you well. We appreciate the time and effort you put into applying for the driver position at our rental company. After careful consideration of all applications received, we regret to inform you that your application has not been successful on this occasion.</p>

        <p>We received a large number of applications from highly qualified candidates, and while your skills and experience are commendable, we have selected another candidate whose qualifications more closely match the requirements of the position at this time.</p>
    
        <p>We genuinely appreciate your interest in joining our team and want to thank you for considering a career opportunity with us. Your application remains in our database, and we will keep it on file for future openings that align more closely with your profile.</p>
    
        <p>We wish you all the best in your job search and your future endeavors. If you have any questions or would like feedback on your application, please feel free to reach out to us.</p>
    
        <p>Thank you once again for your interest in our company.</p>
    
    <p>
    Rentaly</p>

    EOD;
        MailSend($email, $sub, $mainContent);
    }
}
?>