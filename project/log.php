<?php

$servername = "localhost";
$username = "root";
$dbname = "gym";

$conn = new mysqli($servername, $username, "", $dbname);

if ($conn->connect_error) {
    die("error in connection to db.....");
}

if (isset($_POST["sub"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

     $sql = "SELECT * FROM clients WHERE email = '$email' and pass=$password";

    $rdata = $conn->query("select * from clients where email = '$email'");

    $rdata1 = mysqli_fetch_array($rdata);

    if($rdata1[6] == "$email"){
    $ps = hash("sha256", $password);

        $row = hash("sha256", $rdata1[8]);
        if ($ps == $row) {
            // Start a session and store user data
            session_start();
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["email"];
            
            
            // Redirect to dashboard.php
            header("Location:http://localhost/PROJECT%20I/project/profile.php");
            
    }
    else{
        echo("invalid data entered");
    }

    
}
}

?>
