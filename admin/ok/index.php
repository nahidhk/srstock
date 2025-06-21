<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Redirect to the login page if not authenticated
    header('Location: /admin/?error=You must be logged in to access this page');
    exit;
}
?>