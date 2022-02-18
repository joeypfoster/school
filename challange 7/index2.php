<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "challenge7";
  

  if ($_POST['Date'] == "2022/03/03") {
  	$date = "dateone";
  } else if ($_POST['Date'] == "2022/03/04") {
  	$date = "datetwo";
  }
  $id;
  $time;
  $free;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT ID, TIME, FREE, USER FROM $date";
      $result = $conn->query($sql);

      


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
</head>
<body>
	
<div class="formdiv">
	<form action="/plan.php" method="POST">
		<label>Name:</label> <input type="text" name="name" id="name" value="<?php echo $_POST['Name']?>" readonly><br>
		<label>Mail:</label> <input type="text" name="mail" id="mail" value="<?php echo $_POST['Mail']?>" readonly><br>
		<label>Date:</label> <input type="text" name="date" id="date" value="<?php echo $_POST['Date']?>" readonly><br>
		<label>Time:</label> <select name="Time" id="Time" list="times">
						<datalist id="times">
								<?php
								if ($result->num_rows > 0) {
			          // output data of each row
					          while($row = $result->fetch_assoc()) {
					            if ($row["FREE"] == "TRUE") {
					            	echo "<option>".$row["TIME"]."</option>";
					            }

					          }
					      } else {
					          echo "0 results";
					      }
								?>
						</datalist>
				  </select><br>

		<input type="Submit" id="Submit" value="Verstuur">
	</form>
</div>
</body>
</html>