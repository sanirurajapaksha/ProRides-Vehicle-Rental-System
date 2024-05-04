<?php
session_start();
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="./styles/checkout.css">
</head>

<body>


    <!-- Checkout Section -->
    <section id="checkout">
        <h2>Checkout</h2>

        <!-- Display user's personal details -->
        <h3>Personal Details</h3>
        <p>Name: <?php echo $_POST['name']; ?></p>
        <p>Email: <?php echo $_POST['email']; ?></p>

        <?php $name = $_POST['name']; ?>
        <?php $email = $_POST['email']; ?>

        
        <!-- Form to collect card details -->
        <form action="process_checkout.php" method="post">
            <input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
            <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" required>
            <label for="expiry-date">Expiry Date:</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            <p>Total Price: <?php echo $_POST["price_variable"] ?> </p>
            <input type="hidden" id="total-price" name="total-price" value="<?php echo $_POST["price_variable"] ?>">
            <input type="submit" value="Submit Payment">
        </form>
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
                    <a href="policy.php">Privacy Policy</a>
                    <a href="terms.php">Terms and Conditions</a>
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