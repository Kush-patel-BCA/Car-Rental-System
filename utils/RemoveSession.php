<?php 
    session_start();
    if(isset($_SESSION['previous'])){
        if(basename($_SERVER['PHP_SELF']) != $_SESSION['previous'] && basename($_SERVER['PHP_SELF']) != "car-single.php" && basename($_SERVER['PHP_SELF']) != "book-car.php"  ){
            unset($_SESSION['bodyFilter']);
            unset($_SESSION['pickupLocation']);
            unset($_SESSION['dropLocation']);
            unset($_SESSION['pickupDate']);
            unset($_SESSION['dropDate']);
            unset($_SESSION['bodyFilter']);
            unset($_SESSION['SeatFilter']);
            unset($_SESSION['car']);
            ?>
<script>
localStorage.removeItem("body")
localStorage.removeItem("seat")
</script>
<?php 
        }      
    }
?>