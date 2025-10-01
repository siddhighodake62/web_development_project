<?php
session_start();

// Check if payment details exist in session
if (!isset($_SESSION['paymentDetails'])) {
    header('Location: payment.php');
    exit();
}

$paymentDetails = $_SESSION['paymentDetails'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .bill-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .bill-info {
            text-align: left;
            margin-bottom: 20px;
        }

        .bill-info p {
            margin: 8px 0;
            font-size: 16px;
            color: #555;
        }

        .status {
            font-weight: bold;
            padding: 10px;
            color: #fff;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
        }

        .success {
            background-color: #4CAF50;
        }

        .error {
            background-color: #f44336;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="bill-container">
    <h2>Payment Bill</h2>

    <div class="bill-info">
        <p><strong>Student Name:</strong> <?php echo $paymentDetails['studentName']; ?></p>
        <p><strong>Room Number:</strong> <?php echo $paymentDetails['roomNumber']; ?></p>
        <p><strong>Room Type:</strong> <?php echo ucfirst($paymentDetails['roomType']); ?></p>
        <p><strong>Amount Paid:</strong> $<?php echo number_format($paymentDetails['amount'], 2); ?></p>
        <p><strong>Payment Method:</strong> <?php echo ucfirst($paymentDetails['paymentMethod']); ?></p>
        <p><strong>Status:</strong> 
            <span class="status <?php echo ($paymentDetails['status'] === 'success') ? 'success' : 'error'; ?>">
                <?php echo ucfirst($paymentDetails['status']); ?>
            </span>
        </p>
    </div>

    <!-- Back to Home Button -->
    <a href="index.php" class="btn">Back to Home</a>
</div>

</body>
</html>
