<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "gym";

$conn = new mysqli($servername, $username, "", $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass= $_POST["password"];

    $sql = "SELECT * FROM clients WHERE email = '$email' and pass='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {  
        $row = $result->fetch_assoc(); 
        header("location:http://localhost/PROJECT%20I/project/profile.php");
    } else {
        echo "Invalid user name or password. Please check.";
    }
}

$conn->close();
?>
