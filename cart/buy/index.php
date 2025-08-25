<?php
$poductID = $_POST['productId'] ?? null;
$img = $_POST['productImage'] ?? null;
$color = $_POST['color'] ?? null;
$qty = $_POST['qty'] ?? 1;
$sizes = $_POST['productSize'];
echo "<h1>Product ID: " . htmlspecialchars($poductID) . "</h1>";
echo "<h1>Product Image: " . htmlspecialchars($img) . "</h1>";
echo "<h1>Product Color: " . htmlspecialchars($color) . "</h1>";
echo "<h1>Product Quantity: " . htmlspecialchars($qty) . "</h1>";
echo "<h1>Product Sizes: " . htmlspecialchars($sizes) . "</h1>";
?>