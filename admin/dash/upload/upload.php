<?php
header('Content-Type: application/json');

$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$uploadedPhotos = [];
$response = [];
$errors = [];

// Process uploaded images
foreach ($_FILES as $key => $file) {
    if (strpos($key, 'img') === 0) {
        if ($file['error'] === 0) {
            $tmpName = $file['tmp_name'];
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newName = uniqid('img_', true) . '.' . $ext;
            $target = $uploadDir . $newName;

            if (move_uploaded_file($tmpName, $target)) {
                $uploadedPhotos[] = $newName;
            } else {
                $errors[] = "Failed to upload file: " . $file['name'];
            }
        } else {
            $errors[] = "Upload error for file: " . $file['name'] . " (Error code: " . $file['error'] . ")";
        }
    }
}



// Return JSON response
if (empty($errors)) {
    echo json_encode(["type" => true]);
} else {
    echo json_encode(["type" => false]);
}
