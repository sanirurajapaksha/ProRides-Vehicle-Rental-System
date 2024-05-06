function deleteVehicle(vehicleId) {
    if (confirm("Are you sure you want to delete this vehicle?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Display toast message indicating successful deletion
                var toast = document.getElementById("toast");
                toast.innerHTML = "Vehicle deleted successfully.";
                toast.classList.add("show");
                setTimeout(function() {
                    toast.classList.remove("show");
                }, 3000);

                // Optionally, remove the deleted vehicle from the DOM
                var deletedVehicle = document.getElementById("vehicle-" + vehicleId);
                deletedVehicle.parentNode.removeChild(deletedVehicle);
            }
        };
        xhttp.open("GET", "delete_vehicle.php?id=" + vehicleId, true);
        xhttp.send();
    }
}

