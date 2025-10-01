<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php"); // Redirect to admin login page if not logged in
    exit();
}

// Redirect to admin dashboard after login
header("Location: admindashboard.html");
exit();
?>
