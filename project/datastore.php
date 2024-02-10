

<?php 
	$servername = "localhost";
	$username = "root";
	$dbname = "gym";

	$conn = new mysqli($servername,$username,"",$dbname);


	if($conn->connect_error){
		die("error in connection to db.....");
	}else{
		echo "connection succesfully established";
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fname = $_POST["first_name"];
		$lname = $_POST["last_name"];
		$gen = $_POST["gender"];
		$weight = $_POST["weight"];
		$address = $_POST["address"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
	
		$sql = "INSERT INTO clients (fname,lname,gender,weight,address,email,phone,pass) VALUES ('$fname','$lname','$gen','$weight','$address','$email','$phone' ,'$pass')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login_form.php 
        header("Location:http://localhost/PROJECT%20I/project/login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

