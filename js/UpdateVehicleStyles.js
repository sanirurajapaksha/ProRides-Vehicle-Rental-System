// UpdateVehicleScript.js

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', this.action, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    window.location.href = 'view_vehicle.php';
                } else {
                    document.getElementById('error-message').textContent = response.message;
                }
            }
        };
        xhr.send(formData);
    });
});
