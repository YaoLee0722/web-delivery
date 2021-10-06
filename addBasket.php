<?php
if (!isset($_GET['product']) || !isset($_GET['size'])) {
    echo "Add product failed, please try again! <a href='./cavallo.php'>back</a>";
    exit;
}
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['phone'])) {
    echo "No Customer Info, please confirm it first! <a href='./cavallo.php'>Go To</a>";
    exit;
}
$product = $_GET['product'];
$size = $_GET['size'];
$price = 0;
$username = $_SESSION['username'];
$phone = $_SESSION['phone'];
$address = "";
//$address = $_SESSION['address'];

if ($size == 's') {
    $price = 1.75;
} else if ($size == 'm') {
    $price = 2.25;
} else if ($size == 'l') {
    $price = 2.75;
} else if ($size == 'xl') {
    $price = 3.5;
} else if ($size == 'xxl') {
    $price = 5.75;
} else {
    echo "This size is not exist, please try another one! <a href='./cavallo.php'>back</a>";
    exit;
}

include "db.php";


$sql = "INSERT INTO ice_order (product, size, price, time, dispatch, phone, customer_name, ispay, count) VALUES ('{$product}', '{$size}', $price,
now(), '{$address}', '{$phone}', '{$username}', 0, 1)";
$submit_thought_result = $conn->query($sql);

if ($submit_thought_result === true) {
    header("Location: ./order.php?msg=success");
    die();
}
