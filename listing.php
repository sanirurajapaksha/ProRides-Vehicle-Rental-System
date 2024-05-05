<?php
session_start();
include 'header.php';
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


        <script>
            // Add a loop to diplay the vehicle listings


        </script>

        <div class="vehicle">
            <img src="/assets/sedan.jpg" alt="Vehicle 1">
            <div class="vehicle-details">
                <h2><?php echo "$model" . " " . "$year" ?> </h2>
                <p>Price: <?php echo "$price" ?></p>
                <button class="vehicle_button">View Details</button>
            </div>
        </div>

        <div class="vehicle">
            <img src="/assets/sedan.jpg" alt="Vehicle 1">
            <div class="vehicle-details">
                <h2><?php echo "$model" . " " . "$year" ?> </h2>
                <p>Price: <?php echo "$price" ?></p>
                <button class="vehicle_button">View Details</button>
            </div>
        </div>

        <div class="vehicle">
            <img src="/assets/sedan.jpg" alt="Vehicle 1">
            <div class="vehicle-details">
                <h2><?php echo "$model" . " " . "$year" ?> </h2>
                <p>Price: <?php echo "$price" ?></p>
                <button class="vehicle_button">View Details</button>
            </div>
        </div>

        <div class="vehicle">
            <img src="/assets/sedan.jpg" alt="Vehicle 1">
            <div class="vehicle-details">
                <h2><?php echo "$model" . " " . "$year" ?> </h2>
                <p>Price: <?php echo "$price" ?></p>
                <button class="vehicle_button">View Details</button>
            </div>
        </div>
        <!-- Add more vehicles as needed -->
    </section>


    <script>
        document.querySelectorAll('.vehicle_button').forEach((button) => {
            button.addEventListener('click', () => {
                window.location.href = 'details.php';
            });
        });
    </script>


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