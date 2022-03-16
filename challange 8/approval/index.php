<?php
 // connect to database
 $conn = mysqli_connect('localhost', 'root', '', 'testcars');

 // check connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 // write query for all products
 $sql = 'SELECT ID, KLANT, DATUM, REASON, DATA FROM vistacars';

 // make query & get result
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
 $testcars = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // close connection
 mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approval</title>
    <link rel="stylesheet" href="approval.css">
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
            <a class="archive-btn" href="/archive">Archief</a>
        </div>



    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>



        </body>


    <script src="approval.js">></script>
</html>