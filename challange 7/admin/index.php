<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "challenge7";
  
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title></title>
</head>
<body>

	<div class="timeOFdate">
		<h1>2022-03-03</h1>
	<?php
	  $sql = "SELECT * FROM dateone ";
	      $result = $conn->query($sql);

	  if ($result->num_rows > 0) {
	  // output data of each row
	    while($row = $result->fetch_assoc()) {

	    	$ID = $row["ID"];
	    	$TIME = $row["TIME"];
	    	$FREE = $row["FREE"];
	    	$USER = $row["USER"];

	    	echo "<p>".$ID. " Time: ". $TIME. " Open:". $FREE. " --User: ". $USER. "</p><br>";
	    }

	  }else {
	  	echo "0";
	  }

	?>

	</div>

	<div class="timeOFdate">
		<h1>2022-03-04</h1>
	<?php
	  $sql = "SELECT * FROM datetwo ";
	      $result = $conn->query($sql);

	  if ($result->num_rows > 0) {
	  // output data of each row
	    while($row = $result->fetch_assoc()) {

	    	$ID = $row["ID"];
	    	$TIME = $row["TIME"];
	    	$FREE = $row["FREE"];
	    	$USER = $row["USER"];

	    	echo "<p>".$ID. " Time: ". $TIME. " Open:". $FREE. " --User: ". $USER. "</p><br>";
	    }

	  }else {
	  	echo "0";
	  }

	?>

	</div>
</body>
</html>