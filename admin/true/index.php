
<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if ($username === 'admin' && $password === 'admin') {
    // Redirect to the admin page
    header('Location: /admin/ok/');
    $_SESSION['admin'] = true; // Set a session variable to indicate admin access
    exit;
} else {
    // Redirect to the login page with an error message
    header('Location: /admin/?error=Invalid credentials');
    exit;
}

?>