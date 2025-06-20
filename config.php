<?php
// Database configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Nahid@!2345s$!';
$dbName = 'srstock';

// Create connection
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
