<?php
include 'includes/database.php';

// Check if vehicle ID is provided in the URL
if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];

    // Fetch vehicle details from the database based on vehicle ID
    $sql_fetch = "SELECT * FROM vehicle WHERE vehicleid = $vehicle_id";
    $result_fetch = mysqli_query($conn, $sql_fetch);

    // Check if vehicle exists
    if (mysqli_num_rows($result_fetch) > 0) {
        $vehicle = mysqli_fetch_assoc($result_fetch);

        // Initialize the update query variable
        $sql_update = "";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $vehicle_model = $_POST['model'];
            $vehicle_type = $_POST['type'];
            $year_manufacture = $_POST['year'];
            $price = $_POST['price'];


            $sql_update = "UPDATE vehicle SET model='$vehicle_model', type='$vehicle_type', year='$year_manufacture', price='$price' WHERE vehicleid=$vehicle_id";


            // Execute the update query if not empty
            if (!empty($sql_update)) {
                if (mysqli_query($conn, $sql_update)) {
                    header("Location: view_vehicle.php");
                    exit();
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            }
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
    <link rel="stylesheet" href="styles/UpdateVehicleStyles.css">
</head>

<body>
    <div class="container">
        <h2>Edit Vehicle</h2>
        <form id="update-vehicle-form" action="update_vehicle.php?id=<?php echo $vehicle_id; ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="vehicle_id" value="<?php echo $vehicle_id; ?>">
            <!-- Hidden input field to store vehicle ID -->
            <div class="form-group">
                <label for="vehicle_model">Vehicle Model:</label><br>
                <input type="text" id="vehicle_model" name="vehicle_model" value="<?php echo $vehicle['model']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="vehicle_type">Vehicle Type:</label><br>
                <input type="text" id="vehicle_type" name="vehicle_type" value="<?php echo $vehicle['type']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="year_manufacture">Year of Manufacture:</label><br>
                <input type="number" id="year_manufacture" name="year_manufacture"
                    value="<?php echo $vehicle['year']; ?>" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" value="<?php echo $vehicle['price']; ?>" required>
            </div>

            <div class="form-group">
                <button type="submit">Update</button>
            </div>
            <p id="error-message" class="error-message"></p>
        </form>
    </div>
    <script src="js/UpdateVehicleScript.js"></script>
</body>

</html>