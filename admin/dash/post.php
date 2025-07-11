<?php
include_once '../../config.php';

// Get data
$photosJson = $_POST['photos'];
$productName = $_POST['product_name'];
$productDescription = $_POST['product_description'];
$sizesJson = $_POST['sizes'];
$productPrice = $_POST['product_price'];
$productDiscount = $_POST['product_discount'];
$productDiscountAmount = $_POST['product_discount_amount'];

// Prepare and bind
$stmt = $mysqli->prepare("INSERT INTO products 
    (name, description, sizes_json, price, discount, discount_amount, photos_json) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "sssssss",
    $productName,
    $productDescription,
    $sizesJson,
    $productPrice,
    $productDiscount,
    $productDiscountAmount,
    $photosJson
);

// ✅ Execute
if ($stmt->execute()) {
    echo "['true']";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
