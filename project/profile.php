<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Gorkhali Gym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;       
            padding: 0;
        }

        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        p {
            color: #777;
        }

        button {
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            color: #2980b9;
        }

        .booking-container {
            margin-top: 20px;
        }

        .booking-form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
        }

        .booking-form label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .booking-form input {
            padding: 10px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        
        <p>Your profile information goes here.</p>
        
        <h2>Booking System</h2>
        <div class="booking-container">
            <form class="booking-form" action="process_booking.php" method="post">
                <label for="booking_date">Select Date:</label>
                <input type="date" id="booking_date" name="booking_date" required>
                
                <label for="booking_time">Select Time:</label>
                <input type="time" id="booking_time" name="booking_time" required>
                
                <button type="submit">Book Now</button>
            </form>
        </div>

        <p>For additional features and styling, you can customize this page further.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
