<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "challenge7";
  

  if ($_POST['date'] == "2022/03/03") {
    $date = "dateone";
  } else if ($_POST['date'] == "2022/03/04") {
    $date = "datetwo";
  }
  
  $time = $_POST['Time'];
  $mail = $_POST['mail'];
  $name = $_POST['name'];

  $user = "Name:".$name." Mail:".$mail;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM $date WHERE TIME='$time'";
      $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {

      if ($row["FREE"] == "TRUE") {
        $SQL = "UPDATE $date SET FREE='FALSE', USER='$user' WHERE TIME='$time'";

        if ($conn->query($SQL) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $SQL . "<br>" . $conn->error;
        }
      }else {
        echo "this time is already taken!!!";
      }

    }
  } else {
    echo "0 results";
  }



  


?>