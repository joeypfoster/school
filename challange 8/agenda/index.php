<?php
session_start();
    if(!$_SESSION['auth']){
        header('HTTP/1.0 401 Unauthorized');
        header('Location: http://localhost');
    }
  $jan = array();
  $feb = array();
  $mar = array();
  $apr = array();
  $may = array();  
  $jun = array();
  $jul = array();
  $aug = array();
  $sep = array();
  $oct = array();
  $nov = array();
  $dec = array();
  $idAPPROVAL;
  $idAGENDA;
 // connect to database
 $conn = mysqli_connect('localhost', 'root', '', 'chalange8');

 // chechk connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 //write query for all products
 $sql = 'SELECT * FROM agenda';

 // make query & get result
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $idAGENDA = $row['ID'];
        $id = $row['ID'];
        $klant = $row['Klant'];
        $date = $row['Date'];
        $reason = $row['Reason'];
        $info = $row['Info'];

        $Date = explode("-", $date);
        if($Date[1] == '01') {
            array_push($jan, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '02') {
            array_push($feb, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '03') {
            array_push($mar, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '04') {
            array_push($apr, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '05') {
            array_push($may, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '06') {
            array_push($jun, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '07') {
            array_push($jul, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '08') {
            array_push($aug, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '09') {
            array_push($sep, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '10') {
            array_push($oct, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '11') {
            array_push($nov, $id.":".$klant.":".$reason.":".$date.":".$info);
        }else if($Date[1] == '12') {
            array_push($dec, $id.":".$klant.":".$reason.":".$date.":".$info);
        }
     }
} else {
    // echo"000";
}

$sqla = "SELECT * FROM approval";
    $resulta = mysqli_query($conn, $sqla);

    // fetch the resulting rows as an array
    if ($resulta->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $idAPPROVAL = $row['ID'];
        
      }
    }

if(!empty($_POST['inffooo'])) {
    $b = explode(",", $_POST['inffooo']);
    

    $SQLD = "DELETE FROM agenda WHERE ID=$b[0]";
    $conn->query($SQLD);
    $idAPPROVAL++;
    
    $SQLA = "INSERT INTO approval (ID, Klant, Reason, Date, Info)
    VALUES ($idAPPROVAL, '$b[1]', '$b[2]', '$b[3]', '$b[4]')";
    $conn->query($SQLA);

}


if(!empty($_POST['PKLANT']) && !empty($_POST['PREASON']) && !empty($_POST['PDATE']) && !empty($_POST['PINFO'])) {
    $PKLANT = $_POST['PKLANT'];
    $PREASON = $_POST['PREASON'];
    $PDATE = $_POST['PDATE'];
    $PINFO = $_POST['PINFO'];

    $idAGENDA++;
    $SQLa = "INSERT INTO agenda (ID, Klant, Reason, Date, Info)
    VALUES ($idAGENDA, '$PKLANT', '$PREASON', '$PDATE', '$PINFO')";
    $conn->query($SQLa);

    echo "<script type='text/javascript'>alert('Added to Agenda');</script>";
}
       


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="agenda.css">
</head>

    <header>

        <img class="image" src="images/vista.png" alt="">

        <h1>CARS</h1>

    </header>


        <body>

        <div class="sidenav">
            <a class="agenda-btn" href="/agenda">Agenda</a>
            <br> <br>
            <a class="approval-btn" href="/approval">Approval</a>
            <br> <br>
            <a class="archive-btn" href="/archief">Archief</a>
        </div>

        <button style="margin-left: 400px; margin-top: 300px;" onclick="myFunction()">➕</button>
        <div id="popupADD" class="hide" style="margin-left: 400px; margin-top: 50px;">
            <form method="POST">
                KLANT<input type="text" name="PKLANT"><br>
                REASON<input type="text" name="PREASON"><br>
                DATE<input type="Date" name="PDATE"><br>
                INFO<input type="text" name="PINFO"><br>
                <input type="submit" name="PSUBMIT">
            </form>
        </div>

<div id="content">
        <div id="1" class="dropdown">
            <button class="dropdown-btn">Jan
                <i  class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">

                <?php  $CJAN = count($jan);

                for ($j = 0; $j < $CJAN; $j++) {
                    $data = explode(":", $jan[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="2" class="dropdown">
            <button  class="dropdown-btn">Feb 
                <i  class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CFEB = count($feb);

                for ($j = 0; $j < $CFEB; $j++) {
                    $data = explode(":", $feb[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="3" class="dropdown">
            <button  class="dropdown-btn">Mar
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CMAR = count($mar);

                for ($j = 0; $j < $CMAR; $j++) {
                    $data = explode(":", $mar[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="4" class="dropdown">
            <button class="dropdown-btn">Apr
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CAPR = count($apr);

                for ($j = 0; $j < $CAPR; $j++) {
                    $data = explode(":", $apr[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="5" class="dropdown">
            <button class="dropdown-btn">May 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CMAY = count($may);

                for ($j = 0; $j < $CMAY; $j++) {
                    $data = explode(":", $may[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="6" class="dropdown">
            <button class="dropdown-btn">Jun
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CJUN = count($jun);

                for ($j = 0; $j < $CJUN; $j++) {
                    $data = explode(":", $jun[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="7" class="dropdown">
            <button class="dropdown-btn">Jul
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CJUL = count($jul);

                for ($j = 0; $j < $CJUL; $j++) {
                    $data = explode(":", $jul[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="8" class="dropdown">
            <button class="dropdown-btn">Aug
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CAUG = count($aug);

                for ($j = 0; $j < $CAUG; $j++) {
                    $data = explode(":", $aug[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="9" class="dropdown">
            <button class="dropdown-btn">Sep 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CSEP = count($sep);

                for ($j = 0; $j < $CSEP; $j++) {
                    $data = explode(":", $sep[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="10" class="dropdown">
            <button class="dropdown-btn">Okt
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $COKT = count($okt);

                for ($j = 0; $j < $COKT; $j++) {
                    $data = explode(":", $okt[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>

        <div id="11" class="dropdown">
            <button class="dropdown-btn">Nov 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CNOV = count($nov);

                for ($j = 0; $j < $CNOV; $j++) {
                    $data = explode(":", $nov[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>>
            </div>
        </div>

        <div id="12" class="dropdown">
            <button class="dropdown-btn">Dec 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <?php  $CDEC = count($dec);

                for ($j = 0; $j < $CDEC; $j++) {
                    $data = explode(":", $dec[$j]);
                    echo "<form method='POST'><input type='text' name='inffooo' value='".$data[0].",".$data[1].",".$data[2].",".$data[3].",".$data[4]."' readonly><input type='submit' value='✅'></form></br>";
                }
                ?>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>



        </body>


    <script src="agenda.js"></script>
</html>

