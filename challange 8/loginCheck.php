<?php 
	// $servername = "localhost";
	// $username = "root";
	// $password = "root";
	// $dbname = "loginVistaCars";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	// // Check connection
	// if ($conn->connect_error) {
	//   die("Connection failed: " . $conn->connect_error);
	// }

	// $sql = "SELECT id, USERNAME, PASSWD FROM users";
	// $result = $conn->query($sql);

	// if ($result->num_rows > 0) {
	//   // output data of each row
	//   while($row = $result->fetch_assoc()) {
	    
	//   }
	// } else {
	//   echo "0 results";
	// }
	// $conn->close();
	session_start();
	$psswd = "2c7f24be73fa9177e7fa69398e903ddf";
	$_SERVER['PHP_AUTH_PW'] = $_POST['Password'];

	if (!isset($_SERVER['PHP_AUTH_PW']) || md5($_SERVER['PHP_AUTH_PW']) != $psswd) {
	    header('HTTP/1.0 401 Unauthorized');
	    echo 'Password whas incorrect';
	    $_SESSION['auth'] = false;
	    exit;
	} else {
		$_SESSION['auth'] = true;
		header('Location: http://localhost:8888/archief');
	}

?>

