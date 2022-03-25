<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "VistaMovies";
$mailarr = array();
$id;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$id = $row['id'];
  	array_push($mailarr, $row['gmail']);
  }
} else {
  // echo "0 results";
}

$sqll = "SELECT * FROM User_data";

$result = $conn->query($sqll);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$DATAID = $row['id'];
  	
  }
} else {
  // echo "0 results";
}

if(!empty($_POST['password']) && !empty($_POST['mail']) && !empty($_POST['name'])) {
	if(!in_array(md5(strtolower($_POST['mail'])), array_map('strtolower',$mailarr))){ 
		$id++;
		$DATAID++;
		$name = $_POST['name'];
		$email = md5(strtolower($_POST['mail']));
		$password = md5($_POST['password']);

		$SQLL = "INSERT INTO Users (id, name, gmail, password) VALUES ($id, '$name', '$email', '$password')";
		$conn->query($SQLL);

		$SQL = "INSERT INTO User_data (id, name, genre, mylist, rewatch, UserID) VALUES ($DATAID, '$name', '', '', '', $id)";
		$conn->query($SQL);
		echo "<script type='text/javascript'>alert('new account created'); window.location.href='http://localhost:8888';</script>";
		$_SESSION['auth'] = true;
	} else {
		echo "<script type='text/javascript'>alert('mail already in use');</script>";
		$_SESSION['auth'] = false;
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
		name:<input type="text" name="name"><br>
		mail:<input type="email" name="mail"><br>
		password:<input type="password" name="password"><br>
		<input type="submit" name="submit">
	</form>
	<a href="/login">Register</a>
</body>
</html>