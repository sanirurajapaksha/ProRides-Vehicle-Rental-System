<?php
include 'database.php'; // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_type = $_POST['vehicle_type'];
    $year_manufacture = $_POST['year_manufacture'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    
    // Image Upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.<br>";
            echo "Image Path: " . $target_file; // Display the image path

            // Insert query
            $sql = "INSERT INTO vehicles (vehicle_model, vehicle_type, year_manufacture, description, price, image_url) VALUES ('$vehicle_model', '$vehicle_type', '$year_manufacture', '$description', '$price', '$target_file')";

            if (mysqli_query($conn, $sql)) {
                // Redirect back to the page to display added record
                header("Location: view_vehicle.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
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

            <label for="description">Description:</label><br>
            <textarea id="description" name="description"></textarea><br><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price"><br><br>

            <label for="image">Vehicle Image:</label><br>
            <input type="file" name="image" id="image"><br><br>

            <div class="submit-container">
                <input type="submit" name="submit" value="Submit">
            </div>
            <p id="error-message" class="error-message"></p>
        </form>
    </div>
</body>

</html>