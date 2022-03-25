<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "VistaMovies";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(!empty($_POST['password']) && !empty($_POST['mail'])) {
	$psswd;
	$mail = md5(strtolower($_POST['mail']));
	$sql = "SELECT * FROM Users WHERE gmail='$mail'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$psswd = $row['password'];
	  }
	} else {
	  echo "0 results";
	}
	$_SERVER['PHP_AUTH_PW'] = $_POST['password'];

	if (!isset($_SERVER['PHP_AUTH_PW']) || md5($_SERVER['PHP_AUTH_PW']) != $psswd) {
	    header('HTTP/1.0 401 Unauthorized');
	    echo 'Password whas incorrect';
	    $_SESSION['auth'] = false;
	    exit;
	} else {
		$_SESSION['auth'] = true;
		header('Location: http://localhost:8888');
	}
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
	<form action="" method="POST">
		mail:<input type="email" name="mail"><br>
		password:<input type="password" name="password"><br>
		<input type="submit" name="submit">
	</form>
	<a href="/register">Register</a>
</body>
</html>