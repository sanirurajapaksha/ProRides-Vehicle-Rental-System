<?php
include 'database.php'; // Include the database connection file

// Check if vehicle ID is provided in the URL
if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];

    // Fetch vehicle details from the database based on vehicle ID
    $sql_fetch = "SELECT * FROM vehicles WHERE vehicle_id = $vehicle_id";
    $result_fetch = mysqli_query($conn, $sql_fetch);

    // Check if vehicle exists
    if (mysqli_num_rows($result_fetch) > 0) {
        $vehicle = mysqli_fetch_assoc($result_fetch);

        // Initialize the update query variable
        $sql_update = "";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $vehicle_model = $_POST['vehicle_model'];
            $vehicle_type = $_POST['vehicle_type'];
            $year_manufacture = $_POST['year_manufacture'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            // Check if a new image is uploaded
            if ($_FILES['image']['size'] > 0) {
                $target_dir = "uploads/"; // Directory where images will be saved
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // Update query with image URL
                    $sql_update = "UPDATE vehicles SET vehicle_model='$vehicle_model', vehicle_type='$vehicle_type', year_manufacture='$year_manufacture', description='$description', price='$price', image_url='$target_file' WHERE vehicle_id=$vehicle_id";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                // Update query without image URL
                $sql_update = "UPDATE vehicles SET vehicle_model='$vehicle_model', vehicle_type='$vehicle_type', year_manufacture='$year_manufacture', description='$description', price='$price' WHERE vehicle_id=$vehicle_id";
            }

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
} // Display form with vehicle details for editing
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
                <input type="text" id="vehicle_model" name="vehicle_model"
                    value="<?php echo $vehicle['vehicle_model']; ?>" required>
            </div>
            <div class="form-group">
                <label for="vehicle_type">Vehicle Type:</label><br>
                <input type="text" id="vehicle_type" name="vehicle_type" value="<?php echo $vehicle['vehicle_type']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="year_manufacture">Year of Manufacture:</label><br>
                <input type="number" id="year_manufacture" name="year_manufacture"
                    value="<?php echo $vehicle['year_manufacture']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" required><?php echo $vehicle['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" value="<?php echo $vehicle['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="image">Vehicle Image:</label><br>
                <input type="file" name="image" id="image">
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