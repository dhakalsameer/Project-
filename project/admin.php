<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Client Information</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <header>
        <h1>Admin - Client Information</h1>
    </header>

    <div class="container">
        <h2>Client List</h2>
        <table id="clientTable">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Weight</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_clients.php'; ?>
            </tbody>
        </table>
    </div>

    <!-- Your JavaScript scripts here -->

</body>
</html>

<?php
// Assuming you have a MySQL database named "gym"
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "gym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch clients from the database
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='editable' data-field='first_name'>" . $row["first_name"] . "</td>";
        echo "<td class='editable' data-field='last_name'>" . $row["last_name"] . "</td>";
        echo "<td class='editable' data-field='gender'>" . $row["gender"] . "</td>";
        echo "<td class='editable' data-field='weight'>" . $row["weight"] . "</td>";
        echo "<td class='editable' data-field='address'>" . $row["address"] . "</td>";
        echo "<td class='editable' data-field='email'>" . $row["email"] . "</td>";
        echo "<td class='editable' data-field='phone'>" . $row["phone"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No clients found</td></tr>";
}

$conn->close();
?>

