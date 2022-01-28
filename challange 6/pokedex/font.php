<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$base = "https://pokeapi.co/api/v2/pokemon/";
$type = "https://pokeapi.co/api/v2/pokemon-form/";

for($id = 603; $id < 899; $id++){
    if ($id < 10) {
        $ID = "#00".$id;
    } else if ($id < 100) {
        $ID = "#0".$id;
    } else {
        $ID = "#".$id;
    }
    $data = file_get_contents($base.$id.'/');
    $pokemon = json_decode($data);
    $NAME = $pokemon->name;
    $data1 = file_get_contents($base.$id.'/');
    $pokemon1 = json_decode($data1);
    $TYPE = $pokemon1->types[0]->type->name;

    $sql = "INSERT INTO data (ID, NAME, POWER) VALUES ('$ID', '$NAME', '$TYPE')";

    // $sql = "DELETE FROM data WHERE ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
}


    
}

$conn->close();

?>