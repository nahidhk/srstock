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

            // 🟢 Use original file name (sanitize it first)
            $originalName = basename($file['name']);
            $originalName = preg_replace("/[^a-zA-Z0-9.\-_]/", "_", $originalName); // sanitize name

            $target = $uploadDir . $originalName;

            // If file already exists, add a suffix
            $count = 1;
            $newTarget = $target;
            while (file_exists($newTarget)) {
                $pathInfo = pathinfo($originalName);
                $newName = $pathInfo['filename'] . "_$count." . $pathInfo['extension'];
                $newTarget = $uploadDir . $newName;
                $count++;
            }

            if (move_uploaded_file($tmpName, $newTarget)) {
                $uploadedPhotos[] = basename($newTarget);
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
    echo json_encode(["type" => true, "photos" => $uploadedPhotos]);
} else {
    echo json_encode(["type" => false, "errors" => $errors]);
}
