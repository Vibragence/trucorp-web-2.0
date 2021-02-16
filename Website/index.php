<?php
	$servername = "database";
	$username = "UserTrucorp";
	$password = "CorpTru123";

	$connect = new mysqli($servername, $username, $password);

	if ($connect->connect_error) {
	  die("Connection failed: " . $connect->connect_error);
	}
	echo "Connected successfully!!!";
	$sql = "SELECT * FROM Trucorp.users";
	$result = $connect->query($sql);
	if ($result->num_rows > 0) {
	  echo "<table><tr><th>ID</th><th>Nama</th><th>Kantor(Pusat / Cabang)</th></tr>";
	 
	  while($row = $result->fetch_assoc()) {
	    echo "<tr><td>".$row["ID"]."</td><td>".$row["Nama"]." ".$row["Kantor(Pusat / Cabang)"]."</td></tr>";
	  }
	  echo "</table>";
	} else {
 	 echo "0 results";
	}
	
	$connect->close();	

?>
