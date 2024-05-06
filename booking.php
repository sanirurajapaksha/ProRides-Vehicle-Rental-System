<?php
session_start();
include 'header.php';

$model = $_GET['vehiclename'];
$vehicle_id = $_GET['vehicleid'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="./styles/booking.css">
</head>

<body>


    <!-- Booking Details Section -->

    <section id="booking-details">
        <a href="listing.php" class="back-button">Back</a>
        <div class="booking">
            <h2>Booking Details</h2>
            <form id="booking_form" action="checkout.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start-date" required>
                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end-date" required>
                <div class="driver-needed">
                    <p>Driver Needed?</p>
                    <label><input type="radio" name="driver-needed" value="yes">Yes</label>
                    <label><input type="radio" name="driver-needed" value="no" checked>No</label>
                </div>
                <div class="total-price">
                    <p>Total Price:</p>
                </div>
                <input type="hidden" id="price_variable" name="price_variable">
                <input type="hidden" id="vehicleid" name="vehicleid" value="<?php echo $vehicle_id; ?>">
                <input type="hidden" id="model" name="model" value="<?php echo $model; ?>">
                <input type="submit" value="Confirm Booking" onclick="submitForm()">
            </form>
        </div>
    </section>

    <script>


        const price_per_day = `<?php echo $_SESSION['price_per_day']; ?>`;

        const startDate = document.getElementById('start-date');
        const endDate = document.getElementById('end-date');
        const driverneeded = document.querySelector('.driver-needed');
        const totalPrice = document.querySelector('.total-price p');

        startDate.addEventListener('change', updateTotalPrice);
        endDate.addEventListener('change', updateTotalPrice);
        driverneeded.addEventListener('change', updateTotalPrice);

        function updateTotalPrice() {
            const start = new Date(startDate.value);
            const end = new Date(endDate.value);
            const diffTime = Math.abs(end - start);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            totalPrice.textContent = `Total Price: Rs.${diffDays * price_per_day}`;

            document.getElementById('price_variable').value = diffDays * price_per_day;

            if (driverneeded.querySelector('input:checked').value === 'yes') {
                totalPrice.textContent += ' + Rs.5000 (Driver Fee)';
                document.getElementById('price_variable').value = parseInt(document.getElementById('price_variable').value) + 5000;
            }

        }




        function submitForm() {
            document.getElementById('booking_form').submit();
        };




    </script>


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