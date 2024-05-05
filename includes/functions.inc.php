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
