<?php
// Include the database config file
include '../../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
        $stmt = $mysqli->prepare("INSERT INTO subscribers (email) VALUES (?)");
        if ($stmt) {
            $stmt->bind_param('s', $email);
            if ($stmt->execute()) {
                echo "Thank you for subscribing!";
            } else {
                echo "Failed to save subscription.";
            }
            $stmt->close();
        } else {
            echo "Database error.";
        }

        $mysqli->close();
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request method.";
}
?>
