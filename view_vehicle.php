<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vehicles</title>
    <link rel="stylesheet" href="styles/ViewStyle.css">
    <link rel="stylesheet" href="styles/ButtonStyle.css">
    <script src="js/view.js" defer></script>
    <script src="js/delete.js" defer></script>
</head>

<body class="body">
    <header>
        <img id="logo__header" src="./assets/logo.png" alt="ProRides Logo">
        <nav>
            <ul>
                <li><a href="/profile.php">Profile</a></li>
                <li><a href="includes/logout.inc.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Vehicle List</h2>

        <a href="add_vehicle.php" class="add-vehicle-button">Add Vehicle</a>
        <div class="vehicles-list">
            <?php
            include '.inlcudes/database.php';

            $sql = "SELECT * FROM vehicle";
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='vehicle'>";
                    echo "<img src='" . $row["image_url"] . "' alt='Vehicle Image'>";
                    echo "<div class='vehicle-details'>";
                    echo "<h3>" . $row["vehicle_model"] . "</h3>";
                    echo "<p><strong>Type:</strong> " . $row["vehicle_type"] . "</p>";
                    echo "<p><strong>Year of Manufacture:</strong> " . $row["year_manufacture"] . "</p>";
                    echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                    echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
                    echo "<a href='update_vehicle.php?id=" . $row["vehicle_id"] . "' class='edit-button'>Edit</a>";
                    echo "<button onclick='deleteVehicle(" . $row["vehicle_id"] . ")' class='delete-button'>Delete</button>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No vehicles found.</p>";
            }


            mysqli_close($conn);
            ?>
        </div>
    </div>
    <footer>
        <img id="logo_footer" src="./assets/logo.png" alt="ProRides Logo">

    </footer>
</body>

</html>