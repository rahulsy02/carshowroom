<?php
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];

	// Database Connection

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname ="test";

	$conn = new mysqli($servername, $username, $password, $test);
	if ($conn->connect_error) {
		die("Connection Failed");
	}else{
		$stmt = $conn->prepare("INSERT INTO `registration` (`id`, `fullname`, `username`, `email`, `psw`) VALUES (NULL, '$fullname', '$username', '$email', '$psw')");

		$stmt->bind_param("ssss", $fullname, $username, $email, $psw);
		$stmt->execute();
		echo "registration Successfully...";
		$stmt->close();
		$conn->close();
	}

?>-