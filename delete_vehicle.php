<?php
include 'includes/database.php';

// Check if vehicle ID is provided in the URL
if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];

    // Delete vehicle from the database
    $sql = "DELETE FROM vehicle WHERE vehicleid = $vehicle_id";

    if (mysqli_query($conn, $sql)) {
        echo "Vehicle deleted successfully.";
    } else {
        echo "Error deleting vehicle: " . mysqli_error($conn);
    }
} else {
    echo "Vehicle ID not provided.";
}