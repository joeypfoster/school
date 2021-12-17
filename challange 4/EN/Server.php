<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Challenge4";

  $q = $_REQUEST["q"];

  $test = "";



  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";


  $sql = "SELECT ID, NAME, COST, STOCK FROM MenuEN";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    

      // output data of each row
      while($row = $result->fetch_assoc()) {

          if ($q !== "") {
              if ($q == $row["ID"] || $q == $row["NAME"]){
                echo $test === "" ? ":". $row["ID"]. ":". $row["NAME"]. ":". $row["COST"]. ":". $row["STOCK"] : $test;

                //echo $test === "" ? "<br>". "Item: ". $row["Name"]. " - Cost: ". $row["Cost"]. " - In Stock: " . $row["Stock"]. "<br>" : $test;
                
              } else {
                //echo "<br>". "Item: ". $row["Name"]. " -". " This Item is not in store". "<br>";
                
                //echo $test === "" ? "Item: ". $row["Name"] : $test;
              }
            } else {
              echo $test === "" ?  $row["ID"]. ",": $test;
              
            }

          
      }
  } else {
      echo "0 results";
  }


  $conn->close();
?> 