<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "hostel";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select payment information
$sql = "SELECT id, student_name, room_number, room_type, amount, payment_method, status, created_at FROM payments";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>Payment Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Room Number</th>
        <th>Room Type</th>
        <th>Amount</th>
        <th>Payment Method</th>
        <th>Status</th>
        <th>Created At</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['room_number']}</td>
                    <td>{$row['room_type']}</td>
                    <td>{$row['amount']}</td>
                    <td>{$row['payment_method']}</td>
                    <td>{$row['status']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No payment records found</td></tr>";
    }
    ?>
</table>

<?php
// Close connection
$conn->close();
?>

</body>
</html>
