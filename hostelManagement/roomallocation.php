<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "mess_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $food_type = $_POST['food_type'];
    $beverage_type = $_POST['beverage_type'];
    $messcard_type = $_POST['messcard_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO MessCard (name, roll_no, food_type, beverage_type, messcard_type, start_date, end_date, status) 
            VALUES ('$name', '$roll_no', '$food_type', '$beverage_type', '$messcard_type', '$start_date', '$end_date', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Mess Card Registered Successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess Card Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px #0000001a;
            width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #28a745;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Mess Card Registration</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Roll No.:</label>
        <input type="text" name="roll_no" required>

        <label>Food Type:</label>
        <input type="text" name="food_type" required>

        <label>Beverage Type:</label>
        <input type="text" name="beverage_type" required>

        <label>Messcard Type:</label>
        <select name="messcard_type">
            <option value="Temporary">Temporary</option>
            <option value="Permanent">Permanent</option>
        </select>

        <label>Start Date:</label>
        <input type="date" name="start_date">

        <label>End Date:</label>
        <input type="date" name="end_date">

        <label>Status:</label>
        <select name="status">
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select>

        <button type="submit">Submit Query</button>
    </form>
</div>

<h2>Registered Mess Cards</h2>

<?php
// Fetch and display mess card records
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, roll_no, food_type, beverage_type, messcard_type, start_date, end_date, status FROM MessCard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Roll No.</th>
                <th>Food Type</th>
                <th>Beverage Type</th>
                <th>Messcard Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['roll_no']}</td>
                <td>{$row['food_type']}</td>
                <td>{$row['beverage_type']}</td>
                <td>{$row['messcard_type']}</td>
                <td>{$row['start_date']}</td>
                <td>{$row['end_date']}</td>
                <td>{$row['status']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No mess cards registered yet.";
}

$conn->close();
?>

</body>
</html>
