<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
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

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Login to Your Account</h3>
        <form id="loginForm">
            <!-- Email -->
            <div class="input-group">
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="loginEmail" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Login</button>
        </form>

        <!-- Footer -->
        <div class="footer">
            <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
        </div>
    </div>

    <script>
        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting normally

            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            // Predefined credentials for login validation (you should replace this with backend validation)
            const correctEmail = 'siddhi4701@gmail.com'; // Replace with actual registered email
            const correctPassword = 'Siddhi123'; // Replace with actual registered password

            if (email === correctEmail && password === correctPassword) {
                // Redirect to dashboard or homepage after successful login
                window.location.href = 'admindashboard.html'; // Replace with your dashboard URL
            } else {
                alert('Invalid credentials. Please try again.');
            }
        });
    </script>

</body>
</html>
