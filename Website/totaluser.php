<?php
	$servername = "database";
	$username = "UserTrucorp";
	$password = "CorpTru123";

	$connect = new mysqli($servername, $username, $password);

	if ($connect->connect_error) {
	  die("Connection failed: " . $connect->connect_error);
	}
	echo "Connected successfully!!!";

	$sql = "SELECT COUNT(*) FROM Trucorp.users";
	$result = $connect->query($sql);
	$count = $result->fetch_assoc();
	echo "Total Users: ".$count['COUNT(*)'];
	
	$connect->close();
?>
