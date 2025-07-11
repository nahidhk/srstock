<?php
include_once '../../config.php';

// Query
$sql = "SELECT * FROM products";
$result = $mysqli->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        // Decode JSON fields
        $row['sizes_json'] = json_decode($row['sizes_json'], true);
        $row['photos_json'] = json_decode($row['photos_json'], true);

        $products[] = $row;
    }
}

// JSON output
header('Content-Type: application/json');
echo json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$mysqli->close();
?>
