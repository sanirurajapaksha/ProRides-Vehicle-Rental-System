<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProRides - Vehicle Rental System</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>

<body>



    <!-- Hero Section -->
    <section id="hero">
        <div id="hero-content">
            <h2>Sri Lanka's No.1 Vehicle Rental Service</h2>
            <p>Find the perfect vehicle for your next adventure.</p>
            <a href="listing.php">View Vehicles</a>
        </div>
    </section>

    <!-- Vehicle Types Section -->

    <section id="vehicle-types">
        <div class="vehicle-type">
            <img src="./assets/suv.jpg" alt="Vehicle Type 1">
            <h3>SUV</h3>
            <p>Experience the versatility and spaciousness of our SUVs, perfect for family trips and outdoor adventures
            </p>
        </div>
        <div class="vehicle-type">
            <img src="./assets/sedan.jpg" alt="Vehicle Type 2">
            <h3>Sedan</h3>
            <p>Enjoy the comfort and efficiency of our sedans, ideal for city commuting and long-distance travel.</p>
        </div>
        <div class="vehicle-type">
            <img src="./assets/hatchback.jpg" alt="Vehicle Type 3">
            <h3>Hatchback</h3>
            <p>Discover the agility and practicality of our hatchbacks, great for urban maneuverability and weekend
                getaways</p>
        </div>
        <div class="vehicle-type">
            <img src="./assets/truck.jpg" alt="Vehicle Type 4">
            <h3>Truck</h3>
            <p>Harness the power and capability of our trucks, designed to tackle tough jobs and heavy loads with ease.
            </p>
        </div>
    </section>

    <!-- Testimonial Section -->

    <section id="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial">
            <div class="testimonial-content">
                <p>"I rented a car from ProRides for my vacation and it was a fantastic experience. The vehicle was in
                    great condition, and the service was excellent. I highly recommend ProRides to anyone looking for a
                    reliable rental service."</p>
                <cite>- John Doe</cite>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-content">
                <p>"I've been using ProRides for my business trips for the past year, and they never disappoint. Their
                    selection of vehicles is impressive, and the booking process is seamless. I wouldn't hesitate to
                    recommend ProRides to colleagues and friends."</p>
                <cite>- Jane Smith</cite>
            </div>
        </div>
    </section>


    <!-- Explore vehicles Section -->

    <section id="ready-to-drive">
        <h2>Ready to Drive with Us?</h2>
        <p>Explore our wide range of vehicles and start your next adventure today!</p>
        <a href="listing.php" class="cta-button">View Vehicles</a>
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