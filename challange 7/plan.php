<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "challenge7";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT ID, DATE, TIME, NAME FROM meetingGreat";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $idList = $row["ID"];
            echo $idList;
          }
      } else {
          echo "0 results";
      }

      echo $idList;

      $iD = $idList +1;

      $date = '"'. $_POST['date']. '"';
      $time = '"'. $_POST['time']. '"';
      $name = '"'. $_POST['name']. '"';

	$SQL = "INSERT INTO meetingGreat (ID, DATE, TIME, NAME) VALUES ($iD, $date, $time, $name)";

	if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL. "<br>" . mysqli_error($conn);

      }

	echo $_POST['name']. "   ". $_POST['date']. "   ". $_POST['time']
?>