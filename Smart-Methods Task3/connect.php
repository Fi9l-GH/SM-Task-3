<?php
	$sensor = $_POST['sensor'];

	// Database connection
	$conn = new mysqli('localhost','root','','robot_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		echo "error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into information(sensor) values(?)");
		$stmt->bind_param("i", $sensor);
		$execval = $stmt->execute();
		echo $execval;
		echo " log is successfully saved into the database";
		$stmt->close();
		$conn->close();
	}
?>