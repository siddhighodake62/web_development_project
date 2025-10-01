<?php
include("db_connect.php");

// Initialize session for payment details
session_start();

// Initialize payment status message
$message = "";
$isSuccess = false;

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $studentName = $_POST['studentName'];
    $roomNumber = $_POST['roomNumber'];
    $roomType = $_POST['roomType'];
    $amount = $_POST['amount'];
    $paymentMethod = $_POST['paymentMethod'];
    $cardNumber = $_POST['cardNumber'];
    $expDate = $_POST['expDate'];
    $cvv = $_POST['cvv'];

    // Simulate payment success or failure (replace with real payment gateway logic)
    $isPaymentSuccessful = rand(0, 1) === 1;

    if ($isPaymentSuccessful) {
        // Store payment details in the database
        $query = "INSERT INTO payments 
                  (student_name, room_number, room_type, amount, payment_method, card_number, exp_date, cvv, status) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);
        $status = 'success';
        $stmt->bind_param(
            "sssssssss", 
            $studentName, 
            $roomNumber, 
            $roomType, 
            $amount, 
            $paymentMethod, 
            $cardNumber, 
            $expDate, 
            $cvv, 
            $status
        );

        if ($stmt->execute()) {
            // Store payment details in session for bill generation
            $_SESSION['paymentDetails'] = [
                'studentName' => $studentName,
                'roomNumber' => $roomNumber,
                'roomType' => $roomType,
                'amount' => $amount,
                'paymentMethod' => $paymentMethod,
                'status' => $status
            ];

            $message = "Payment Successful! Your room booking is confirmed.";
            $isSuccess = true;

            // Redirect to bill page
            header('Location: bill.php');
            exit();
        } else {
            $message = "Payment Failed! Please try again.";
            $isSuccess = false;
        }

        $stmt->close();
    } else {
        $message = "Payment Failed! Please try again.";
        $isSuccess = false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .payment-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 10px;
            margin-top: 10px;
            color: #fff;
            border-radius: 4px;
            text-align: center;
        }

        .success {
            background-color: #4CAF50;
        }

        .error {
            background-color: #f44336;
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Payment Details</h2>

    <!-- Payment form -->
    <form action="payment.php" method="POST">
        <!-- Student Name -->
        <div class="input-group">
            <label for="studentName">Student Name</label>
            <input type="text" id="studentName" name="studentName" placeholder="Enter full name" required>
        </div>

        <!-- Room Number -->
        <div class="input-group">
            <label for="roomNumber">Room Number</label>
            <input type="text" id="roomNumber" name="roomNumber" placeholder="Enter room number" required>
        </div>

        <!-- Room Type -->
        <div class="input-group">
            <label for="roomType">Room Type</label>
            <select id="roomType" name="roomType" required>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite Room</option>
            </select>
        </div>

        <!-- Amount -->
        <div class="input-group">
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
        </div>

        <!-- Payment Method -->
        <div class="input-group">
            <label for="paymentMethod">Payment Method</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="creditCard">Credit Card</option>
                <option value="debitCard">Debit Card</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <!-- Card Number -->
        <div class="input-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" required>
        </div>

        <!-- Expiration Date -->
        <div class="input-group">
            <label for="expDate">Expiration Date</label>
            <input type="text" id="expDate" name="expDate" placeholder="MM/YY" required>
        </div>

        <!-- CVV -->
        <div class="input-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
        </div>

        <!-- Submit Button -->
        <button type="submit">Pay Now</button>
    </form>

    <!-- Display success or failure message -->
    <?php if ($message): ?>
        <div class="alert <?php echo $isSuccess ? 'success' : 'error'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>