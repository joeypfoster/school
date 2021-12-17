<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Challenge4";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";

  if($_POST['Submit'] == ""){
    //CREATE NEW ITEM
  } else if($_POST["Submit"] == "Add Item"){

    if($_POST["NEWLang"] == "NL"){


      $sql = "SELECT ID, NAME, COST, STOCK FROM Menu";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $idList = $row["ID"];
          }
      } else {
          echo "0 results";
      }

      echo $idList;

      $iD = $idList +1;

      //new item variable
      $NEWNAME = '"'. $_POST["NEWName"]. '"';
      $NEWCOST = '"'. $_POST["NEWCost"]. '"';
      $NEWSTOCK = '"'. $_POST["NEWStock"]. '"';
      $SQL = "INSERT INTO Menu (ID, NAME, COST, STOCK) VALUES ($iD, $NEWNAME, $NEWCOST, $NEWSTOCK)";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL. "<br>" . mysqli_error($conn);

      }

    }else if($_POST["NEWLang"] == "EN") {

      $sql = "SELECT ID, NAME, COST, STOCK FROM MenuEN";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $idList = $row["ID"];
          }
      } else {
          echo "0 results";
      }

      echo $idList;

      $iD = $idList +1;

      //new item variable
      $NEWNAME = '"'. $_POST["NEWName"]. '"';
      $NEWCOST = '"'. $_POST["NEWCost"]. '"';
      $NEWSTOCK = '"'. $_POST["NEWStock"]. '"';
      $SQL = "INSERT INTO MenuEN (ID, NAME, COST, STOCK) VALUES ($iD, $NEWNAME, $NEWCOST, $NEWSTOCK)";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL. "<br>" . mysqli_error($conn);

      }

    }

      if(isset($_FILES['image'])) {
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
          
          $extensions= array("jpeg","jpg","png");

          echo "$file_name";
          
          if(in_array($file_ext,$extensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
          
          if(empty($errors)==true){
             move_uploaded_file($file_tmp,"/Applications/MAMP/htdocs/Img/".$_POST["NEWName"].".png");
             echo "Success";
          }else{
             print_r($errors);
          }
       }

    //UPDATE STOCK
  }else if($_POST["Submit"] == "Update Stock") {
      if($_POST["UPDATESTOCKLang"] == "NL") {

        $NAME = $_POST["UPDATESTOCKName"];
        $STOCK = '"'. $_POST["UPDATESTOCKStock"]. '"';
        
        $SQL = "UPDATE Menu SET STOCK=$STOCK WHERE NAME='$NAME'";

        if (mysqli_multi_query($conn, $SQL)) {

          echo "New records created successfully";

        } else {

          echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
        }

      }else if($_POST["UPDATESTOCKLang"] == "EN"){

        $NAME = $_POST["UPDATESTOCKName"];
        $STOCK = '"'. $_POST["UPDATESTOCKStock"]. '"';
        
        $SQL = "UPDATE MenuEN SET STOCK=$STOCK WHERE NAME='$NAME'";

        if (mysqli_multi_query($conn, $SQL)) {

          echo "New records created successfully";

        } else {

          echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
        }

      }

    //UPDATE COST
  }else if($_POST["Submit"] == "Update Cost") {

    if($_POST["UPDATECOSTLang"] == "NL"){

      $NAME = $_POST["UPDATECOSTName"];
      $COST = '"'. $_POST["UPDATECOSTCost"]. '"';

      $SQL = "UPDATE Menu SET COST=$COST WHERE NAME='$NAME'";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
      }

    }else if($_POST["UPDATECOSTLang"] == "EN") {

      $NAME = $_POST["UPDATECOSTName"];
      $COST = '"'. $_POST["UPDATECOSTCost"]. '"';

      $SQL = "UPDATE MenuEN SET COST=$COST WHERE NAME='$NAME'";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
      }


    }

  //UPDATE NAME
  }else if($_POST["Submit"] == "Update Name") {

    if($_POST["REALLang"] == "NL"){

      $NAME = $_POST["REALName"];
      $NEWNAME = '"'. $_POST["UPDATENAMEName"]. '"';

      $SQL = "UPDATE Menu SET NAME=$NEWNAME WHERE NAME='$NAME'";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
      }


    }else if($_POST["REALLang"] == "EN") {
      
      $NAME = $_POST["REALName"];
      $NEWNAME = '"'. $_POST["UPDATENAMEName"]. '"';

      $SQL = "UPDATE MenuEN SET NAME=$NEWNAME WHERE NAME='$NAME'";

      if (mysqli_multi_query($conn, $SQL)) {

        echo "New records created successfully";

      } else {

        echo "Error: " . $SQL . "<br>" . mysqli_error($conn);
      }


    }

      $PATH = "/Applications/MAMP/htdocs/Img/";

      $newname = $_POST["UPDATENAMEName"];

      rename($PATH.$NAME.".png", $PATH.$newname.".png");

  }

$sql = "SELECT ID, FILE FROM Orders";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
      // output data of each row
      while($row = $result->fetch_assoc()) {

            $array = array($row["ID"]);
            $date = date("h:i", mktime());

            $endDate = date("h:i" , mktime(20,47));

                  if ($date == $endDate || $_POST["Submit"] == "RESET ORDERS") {
                    $SQL = "DELETE FROM Orders";
                    
                    foreach ($array as $value){
                      echo "ID: $value";                      
                      $Files = "/Applications/MAMP/htdocs/Orders/ORDER_". $value. ".txt";
                      unlink($Files);

                    }

                    if (mysqli_multi_query($conn, $SQL)) {

                    //echo "New records created successfully";

                    } else {

                    //echo "Error: " . $SQL. "<br>" . mysqli_error($conn);

                    }
                  }

      }
      
  }

  $conn->close();

?> 
<html>
<body>
<br>
Fuction : <?php echo $_POST["Submit"]; ?><br>



</body>
</html>