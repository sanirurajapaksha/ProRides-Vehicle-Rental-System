<?php

session_start();

require_once 'includes/database.php';

$name = $_POST['name'];
// $userid = $_SESSION['userid'];
// $vehicleid = $_SESSION['vehicleid'];
$email = $_POST['email'];
$totalPrice = $_POST['total-price'];


$sql = "INSERT INTO orders (orderid, userid, vehicleid, name, email, total_price) VALUES ('$orderid','$userid', '$vehicleid', '$name', '$email', '$totalPrice')";

if ($conn->query($sql) === TRUE) {
    echo "<script> window.alert('Order Placed Successfully') </script>";
    header("Location: index.php");
} else {
    echo "<script> window.alert('Error Occured While Placing the Order') </script>";
    header("Location: index.php");
}
