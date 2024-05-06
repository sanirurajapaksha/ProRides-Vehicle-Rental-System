<?php

session_start();

require_once 'includes/database.php';

$name = $_POST['name'];
$userid = $_SESSION['userid'];
$vehicleid = $_POST['vehicleid'];
$email = $_POST['email'];
$totalPrice = $_POST['total-price'];
$model = $_POST['model'];


$sql = "INSERT INTO orders (orderid, userid, vehicleid, name, email, total_price) VALUES ('$orderid','$userid', '$vehicleid', '$name', '$email', '$totalPrice')";

if ($conn->query($sql) === TRUE) {
    echo "<script> var true_or_false = window.confirm('Order Placed Successfully'); if(true_or_false == true){window.location.href = 'index.php'} </script>";
} else {
    echo "<script> var true_or_false = window.cofirm('Error Occured While Placing the Order'); if(true_or_false == false){window.location.href = 'index.php'}</script>";
}
