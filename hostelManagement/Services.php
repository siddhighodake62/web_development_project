

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-around;
            background-color: #333;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }

        nav a:hover {
            background-color: #575757;
        }

        .container {
            padding: 20px;
        }

        .section {
            margin: 20px 0;
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input, 
        .input-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }

        .input-group input:focus, 
        .input-group select:focus {
            border-color: #24c629;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #24c629;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #20b026;
        }

/* Style for Food Images */
.food-image {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 10px; /* Space between the images */
    margin-bottom: 20px;
}

.food-image img {
    width: 10px; /* Set the width to 50px */
    height: 200px; /* Set the height to 50px */
    object-fit: cover; /* Ensures that the image aspect ratio is maintained within the 50px by 50px size */
    border-radius: 4px;
}

        
       
        
    </style>
</head>
<body>
    <header>
        <h1>Online Hostel Management System</h1>
    </header>
    <nav>
        <a href="roomallocation.php">Room Allocation</a>
        <a href="payment.php">Payment Method</a>
        <a href="#mess-hall">Mess Hall</a>
        
    </nav>
    <div class="container">
        <div class="section" id="room-allocation">
            <h2>Room Allocation</h2>
            <p>Manage room allocations for students. Assign rooms based on availability and student preferences.</p>
            <a href="roomallocation.php">Room Allocation</a>
        </div>
        <div class="container">
        <div class="section" id="Payment Methodn">
            <h2>Payment Method</h2>
            <p>A payment method refers to the way in which a customer pays for goods or services, such as credit cards, debit cards, or digital wallets. It allows businesses to process transactions securely and efficiently, offering convenience to both the buyer and seller..</p>
            <a href="payment.php">Payment Method</a>
        </div>
    
    <div class="section" id="mess-hall">
    <h2>Mess Hall Delight</h2>
    <p>Mess Hall Delight is your go-to dining destination within the hostel, offering a warm and inviting atmosphere that makes every meal feel special.</p>
    
    <!-- Food Image -->
    <div class="food-image">
        <img src="food1.jpg" alt="Delicious Food" style="width:100%; max-width: 600px; border-radius: 8px;">
        <img src="food2.jpg" alt="Delicious Food" style="width:100%; max-width: 600px; border-radius: 8px;">
        <img src="food3.jpg" alt="Delicious Food" style="width:100%; max-width: 600px; border-radius: 8px;">
        <img src="food4.jpg" alt="Delicious Food" style="width:100%; max-width: 600px; border-radius: 8px;">
    
    </div>
    
    <!-- Food Details -->
    <div class="food-details">
        <h3>Our Menu</h3>
        <ul>
            <li><strong>Breakfast:</strong> Freshly baked bread, eggs, pancakes, and fruit salad.</li>
            <li><strong>Lunch:</strong> Grilled chicken, rice, steamed vegetables, and soup of the day.</li>
            <li><strong>Dinner:</strong> Pasta, pizza, salads, and a choice of desserts.</li>
            <li><strong>Special Dish of the Week:</strong> Spicy curry with basmati rice and naan bread.</li>
            </ul>
    </div>
    
    <!-- Special Dietary Options -->
    <div class="dietary-options">
        <h4>Special Dietary Options Available</h4>
        <p>We offer vegetarian, vegan, and gluten-free options to accommodate everyone's dietary needs. If you have specific dietary restrictions, please let us know, and we will do our best to cater to your needs.</p>
    </div>
    <div class="button-container" style="margin-top: 20px;">
        <button onclick="window.location.href='mess.php'" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
           CLICK HERE
        </button>
</div>

</body></html>

   