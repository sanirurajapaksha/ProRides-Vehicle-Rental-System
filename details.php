<?php

session_start();
include 'header.php';

$year = $_GET['year'];
$price = $_GET['price'];
$model = $_GET['model'];
$vehicleid = $_GET['vehicleid'];
$vehicleimage = $_GET['vehicleimage'];

// Check if user is logged in
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {

    header("Location: login.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProRides - Vehicle Rental System</title>
    <link rel="stylesheet" href="./styles/details.css">
</head>

<body>


    <!-- Vehicle Details Section -->

    <section id="vehicle-details">
        <a href="listing.php" class="back-button">Back</a>
        <div class="vehicle">
            <img src="<?php echo $vehicleimage ?>" alt="Vehicle 1">
            <div class="vehicle-info">
                <h2><?php echo "$model" ?></h2>
                <p>Price: Rs. <?php echo "$price" ?> per day</p>
                <p>Year: <?php echo "$year" ?></p>
                <p>

            </div>
            <a href="booking.php?vehicleid=<?php echo $vehicleid; ?>&vehiclename=<?php echo $model ?>?price=<?php echo $price ?>"
                class="book-button">Book Now</a>
        </div>
    </section>


    <!-- Footer Section -->

    <footer>
        <div id="logodescription_links_contactinfo">
            <div id="footer_left">
                <img id="logo__footer" src="./assets/logo.png" alt="ProRides Logo">
                <p>ProRides is a vehicle rental service that provides a wide range of vehicles for rent. We offer the
                    best
                    prices and the best vehicles for your next adventure.</p>
            </div>
            <div id="footer_center">
                <div id="footer_links">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="privacypolicy.php">Privacy Policy</a>
                    <a href="termsncondition.php">Terms and Conditions</a>
                </div>
                <div id="socialmediaicons">
                    <a href="#"><img src="./assets/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="./assets/tiktok.png" alt="Twitter"></a>
                    <a href="#"><img src="./assets/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="./assets/youtube.png" alt="YouTube"></a>
                </div>
            </div>
            <div id="footer_right">
                <div id="contact_info">
                    <p>ProRides Vehicle Rental Service</p>
                    <p>123, Main Street, Colombo 01</p>
                    <a href="tel:+94 77 123 4567">+94 77 123 4567</a>
                </div>
            </div>
    </footer>
</body>

</html>