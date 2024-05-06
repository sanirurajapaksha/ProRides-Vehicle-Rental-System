<?php
include 'includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_type = $_POST['vehicle_type'];
    $year_manufacture = $_POST['year_manufacture'];
    $description = $_POST['description'];
    $price = $_POST['price'];


    $sql = "INSERT INTO vehicle (model, type, year, price, vehicleimage) VALUES ('$vehicle_model', '$vehicle_type', '$year_manufacture', '$price', 'https://picsum.photos/300/200')";

    if (mysqli_query($conn, $sql)) {
        header("Location: view_vehicle.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="styles/AddVehicleStyles.css">
    <!-- <script src="js/Addstyles.js" defer></script> -->
</head>

<body>
    <div class="container">
        <h2>Add New Vehicle</h2>
        <form method="post" action="" enctype="multipart/form-data">
            <label for="vehicle_model">Vehicle Model:</label><br>
            <input type="text" id="vehicle_model" name="vehicle_model"><br><br>

            <label for="vehicle_type">Vehicle Type:</label><br>
            <input type="text" id="vehicle_type" name="vehicle_type"><br><br>

            <label for="year_manufacture">Year of Manufacture:</label><br>
            <input type="number" id="year_manufacture" name="year_manufacture"><br><br>


            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price"><br><br>



            <div class="submit-container">
                <input type="submit" name="submit" value="Submit">
            </div>
            <p id="error-message" class="error-message"></p>
        </form>
    </div>
</body>

</html>