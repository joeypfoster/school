<?php
	session_start();
	if(!$_SESSION['auth']){
		header('HTTP/1.0 401 Unauthorized');
		header('Location: http://localhost');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search...">
</body>
<script type="text/javascript" src="Search.js"></script>
</html>


<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "VistaCars";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM archief ORDER BY -ID";
	$result = $conn->query($sql);
	echo "<ul id='SearchUL'>";
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	// var of data database
	  	$id = $row['ID'];
	  	$klant = $row['KLANT'];
	  	$date = $row['DATE'];
	  	$reason = $row['REASON'];
	  	// each div has same class(DATA) 
	  	// this is for all data from database
	  	echo "<li><div id=".$id." class='DATA'><h1>".$klant."</h1><br><p>".$date." ".$reason."</p> </div> </li>";
	    
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
	echo "</ul>";


?>
