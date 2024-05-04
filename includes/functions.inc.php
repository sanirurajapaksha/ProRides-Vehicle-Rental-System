<?php

function createUser($conn, $firstname, $lastname, $username, $email, $password)
{
    $sql = "INSERT INTO users (firstname, lastname, name, email, password) VALUES ('$firstname', '$lastname','$username', '$email', '$password')";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function createOrder($conn, $user_id, $vehicle_id, $start_date, $end_date, $driver_needed, $total_price)
{
    $sql = "INSERT INTO orders (user_id, vehicle_id, start_date, end_date, driver_needed, total_price) VALUES ('$user_id', '$vehicle_id', '$start_date', '$end_date', '$driver_needed', '$total_price')";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}