<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Challenge4";

  //echo "you orderd: <br>";

  date_default_timezone_set("cet");

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";

  $sql = "SELECT ID, FILE FROM Orders";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  	while($row = $result->fetch_assoc()) {
  		$idList = $row["ID"];
  	}

  } else {
  	//echo "0 results";
  }

  	if ($_POST['Submit'] == "ORDER"){

	  $iD = $idList +1;

	  echo "Zorg dat je je ID onthoud <br>";
	  echo "Je Order ID : $iD ";

	  $file =  "ORDER_". $iD. ".txt";

	  $fp = fopen("/Applications/MAMP/htdocs/Orders/". $file,"wb");

    $NameUser = $_POST['name'];

    $TITLEcontent = "Language: NL \nName: $NameUser \n";

    fwrite($fp,$TITLEcontent);

	  $SQL = "INSERT INTO Orders (ID, FILE) VALUES ('$iD', '$file')";

	    if (mysqli_multi_query($conn, $SQL)) {

	      //echo "New records created successfully";

	    } else {

	      //echo "Error: " . $SQL. "<br>" . mysqli_error($conn);

	    }

      


  $sql = "SELECT ID, NAME, COST, STOCK FROM Menu";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
      // output data of each row
      while($row = $result->fetch_assoc()) {

      			$array = array($row["ID"]);
      			$NAME = $row['NAME'];
            $COST = $row['COST'];
            $TOTALCOST = array("");


                foreach ($array as $value) {

                  if ($_POST[$value] == "1"){

                	    $content = "--- $_POST[$value] Stuk $NAME \n";
                      $test = $content;
                      $NEWCOST = $COST * 1;
                      
                      array_push($TOTALCOST, $NEWCOST);
                      echo "$NEWCOST1 <br>";

                      fwrite($fp,$test);
                	} else if ($_POST[$value] > "1") {

                      $NEWCOST = $COST * $_POST[$value];
                      array_push($TOTALCOST, $NEWCOST);
                      echo number_format($TOTALCOST, 2). "<br>";

                      $content = "--- $_POST[$value] Stuks $NAME \n";
                      $test = $content;
                      

                      fwrite($fp,$test);

                  }
                	
                }

                foreach ($TOTALCOST as $cost) {
                  $output = $output + $cost;
                  
                  
                }
              
                

      }
  } else {
      echo "0 results";
  }

}
$total = number_format($output, 2);
echo "Total Cost: € $total";
$content = "Total Cost: € $total\n";
$test = $content;
                      
fwrite($fp,$test);



  $conn->close();
  fclose($fp);

?> 
