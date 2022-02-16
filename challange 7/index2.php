<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "challenge7";
  
  $date = $_POST['Date'];
  $id;
  $time;
  $free;
  echo $date;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT ID, TIME, FREE, USER FROM '$date'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $id = $row["ID"];
            echo $id. $time;
            $time = $row["TIME"];
            $free = $row["FREE"];
          }
      } else {
          echo "0 results";
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
	

	<form>
		Name: <input type="text" name="Name" id="Name" value="<?php echo $_POST['Name']?>" disabled><br>
		Mail: <input type="text" name="Mail" id="Mail" value="<?php echo $_POST['Mail']?>" disabled><br>
		Date: <input type="text" name="date" value="<?php echo $_POST['Date']?>" disabled><br>
		Tijd: <select list="times">
						<datalist id="times">
								<?php foreach ($id as $ID) {
												if ($free == "TRUE") {
													echo "<option>".$time."</option>";
												}
								}?>
						</datalist>
				  </select>
	</form>
</body>
</html>