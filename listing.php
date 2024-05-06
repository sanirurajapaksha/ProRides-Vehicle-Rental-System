<?php
session_start();
require 'header.php';
require 'includes/database.php';

$sql = "SELECT * FROM vehicle";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $vehicles = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $vehicles = [];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Listings</title>
    <link rel="stylesheet" href="./styles/listing.css">
</head>

<body>

    <!-- Vehicle Listings Section -->
    <section id="vehicle-listing">
        <?php foreach ($vehicles as $vehicle): ?>
            <div class="vehicle">
                <img src="<?php echo $vehicle['vehicleimage']; ?>" alt="Vehicleimg">
                <div class="vehicle-details">
                    <h2><?php echo $vehicle['model']; ?></h2>
                    <p>Price: <?php echo $vehicle['price']; ?></p>
                    <a class="vehicle_button"
                        href="details.php?vehicleid=<?php echo $vehicle['vehicleid']; ?>&model=<?php echo $vehicle['model']; ?>&price=<?php echo $vehicle['price']; ?>&year=<?php echo $vehicle['year']; ?>&vehicleimage=<?php echo $vehicle['vehicleimage']; ?>">View
                        Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- JavaScript for button click -->

    <!-- <script>
        document.querySelectorAll('.vehicle_button').forEach((button) => {
            button.addEventListener('click', () => {
                // Redirect to vehicle details page
                window.location.href =
            });
        })
    </script> -->

    <!-- Footer Section -->
    <footer>
        <div id="logodescription_links_contactinfo">
            <div id="footer_left">
                <img id="logo__footer" src="./assets/logo.png" alt="ProRides Logo">
                <p>ProRides is a vehicle rental service that provides a wide range of vehicles for rent. We offer
                    the
                    best
                    prices and the best vehicles for your next adventure.</p>
            </div>
            <div id="footer_center">
                <div id="footer_links">
                    <a href="#">Home</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
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