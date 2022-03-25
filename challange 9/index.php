<?php
session_start();
    if(!$_SESSION['auth']){
        header('HTTP/1.0 401 Unauthorized');
        header('Location: http://localhost:8888/login');
    }
    echo var_dump(implode(",", $_SESSION));
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "VistaMovies";
$films = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM all_movies";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $genre = $row['genre'];
    $plot = $row['plot'];
    $year = $row['year'];
    $duration = $row['duration'];
    $filmID = $row['filmID'];
    $poster = $row['poster'];
    array_push($films, $id.'[]'.$name.'[]'.$genre.'[]'.$plot.'[]'.$year.'[]'.$duration.'[]'.$filmID.'[]'.$poster);
    //echo $id. $name. $genre. $plot. $year. $duration. $filmID. $poster. '<br><br><br>';
  }
} else {
  echo "0 results";
}
$countar = count($films);
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
	<div class="movies">
		<?php 
		for ($i=0; $i < $countar; $i++) { 
			$fl = explode("[]", $films[$i]);
			echo '<div class="movie" id='.$fl[0].'><div class=""><img src='.$fl[7].'><p>'.$fl[1].'</p></div></div>';
	    }
		?>
	</div>
</body>
</html>


