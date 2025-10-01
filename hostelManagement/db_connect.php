<?php
$servername = "localhost"; // Fix this line
$username = "root";
$password = ""; // Leave this empty for XAMPP default setup
$dbname = "hostel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
