<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomType = $_POST['room_type'];
    $price = $_POST['price'];
    $roomNumber = $_POST['room_number'];

    $successMessage = "Room Type: $roomType <br> Price: ₹$price per month <br> Room Number: $roomNumber";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Hostel Room Descriptions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .room-card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .room-image {
            width: 40%;
            max-width: 200px;
            margin-right: 20px;
            border-radius: 8px;
            overflow: hidden;
        }
        .room-image img {
            width: 100%;
            height: auto;
        }
        .room-content {
            width: 60%;
            flex-grow: 1;
        }
        .room-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .room-price {
            font-size: 18px;
            color: #e67e22;
            margin-top: 10px;
            font-weight: bold;
        }
        .room-number {
            font-size: 16px;
            color: #007BFF;
            margin-top: 5px;
            font-weight: bold;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #24c629;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #88d2e0;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <?php if (!empty($successMessage)): ?>
        <div class="alert alert-success"><?= $successMessage; ?></div>
    <?php endif; ?>

    <!-- 4-Bed Dormitory -->
    <div class="room-card">
        <div class="room-image">
            <img src="3-bed.jpg" alt="Group Room">
        </div>
        <div class="room-content">
            <div class="room-title">Dormitory Room</div>
            <div class="room-price">Price: ₹1500 per month per bed</div>
            <div class="room-number">Room No: 101</div>
            <div class="booking-period">Booking Period: 6 Months / 1 Year (Students Only)</div>
                 <ul class="room-offers">
                    <li>Communal bathroom</li>
                    <li>Lockers for each Student</li>
                </ul>
                <div class="room-description">
                    A compact dorm with four individual beds. Ideal for student groups who enjoy meeting new people but still prefer a bit of privacy.
                </div><br>
            <form method="POST" action="roomallocation.php">
                <input type="hidden" name="room_type" value="Dormitory Room">
                <input type="hidden" name="price" value="1500">
                <input type="hidden" name="room_number" value="101">
                <button type="submit" class="btn">CLICK HERE</button>
            </form>
        </div>
    </div>

    <!-- Double Room -->
    <div class="room-card">
        <div class="room-image">
            <img src="2-bed.jpg" alt="Double Room">
        </div>
        <div class="room-content">
            <div class="room-title">Double Room</div>
            <div class="room-price">Price: ₹2200 per month per bed</div>
            <div class="room-number">Room No: 102</div>
            <div class="booking-period">Booking Period: 6 Months / 1 Year (Students Only)</div> <ul class="room-offers">
                    <li>2 single beds </li>
                    <li>Shared lounge area</li>
                    <li>Private bathroom</li>
                </ul>
                <div class="room-description">
                    A private room designed specifically for 2 students, with 2 single beds. Includes shared amenities like a small lounge area, and might come with a private bathroom for added comfort.
                </div><br>
            <form method="POST" action="roomallocation.php">
                <input type="hidden" name="room_type" value="Double Room">
                <input type="hidden" name="price" value="2200">
                <input type="hidden" name="room_number" value="102">
                <button type="submit" class="btn">CLICK HERE</button>
            </form>
        </div>
    </div>

    <!-- Single Room -->
    <div class="room-card">
        <div class="room-image">
            <img src="1-bed.jpg" alt="Single Room">
        </div>
        <div class="room-content">
            <div class="room-title">Single Room</div>
            <div class="room-price">Price: ₹2000 per month</div>
            <div class="room-number">Room No: 106</div>
            <div class="booking-period">Booking Period: 6 Months / 1 Year (Students Only)</div>
            <ul class="room-offers">
                    <li>Single bed</li>
                    <li>Desk and chair</li>
                </ul>
                <div class="room-description">
                    A basic private room designed specifically for solo students, offering a comfortable bed and personal space. Ideal for students looking for quiet time after a day of studying or for those who want a little extra privacy.
                </div><br>
            <form method="POST" action="roomallocation.php">
                <input type="hidden" name="room_type" value="Single Room">
                <input type="hidden" name="price" value="2000">
                <input type="hidden" name="room_number" value="106">
                <button type="submit" class="btn">CLICK HERE</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
