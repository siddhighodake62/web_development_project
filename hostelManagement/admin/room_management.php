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

// Query to select student information (you can modify the table and column names as needed)
$sql = "SELECT id, student_name, student_id, room_number,created_at FROM room_allocation";
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
    <title>View Students</title>
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

<h2>Student Records</h2>

<table>
    <tr>
        <th>Room ID</th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Date of Admission</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['student_id']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No student records found</td></tr>";
    }
    ?>
</table>

<?php
// Close connection
$conn->close();
?>

</body>
</html>
