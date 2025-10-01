<?php
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_logged_in']) || $_SESSION['student_logged_in'] !== true) {
    header("Location: student.php"); // Redirect to student login page if not logged in
    exit();
}

// Redirect to student dashboard after login
header("Location: studentdashboard.html");
exit();
?>
