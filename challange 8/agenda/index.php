<?php
 // connect to database
 $conn = mysqli_connect('localhost', 'root', '', 'testcars');

 // chechk connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 //write query for all products
 $sql = 'SELECT ID, KLANT, DATUM, REASON, DATA FROM vistacars';

 // make query & get result
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
 $redbull = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // close connection
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
            <a class="archive-btn" href="/archive">Archief</a>
        </div>


    <div id="content">
        <div id="jan" class="dropdown">
            <button class="dropdown-btn">Jan
                <i  class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="feb" class="dropdown">
            <button  class="dropdown-btn">Feb 
                <i  class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="mar" class="dropdown">
            <button  class="dropdown-btn">Mar
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="apr" class="dropdown">
            <button class="dropdown-btn">Apr
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="may" class="dropdown">
            <button class="dropdown-btn">May 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="jun" class="dropdown">
            <button class="dropdown-btn">Jun
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="jul" class="dropdown">
            <button class="dropdown-btn">Jul
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="aug" class="dropdown">
            <button class="dropdown-btn">Aug
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="sep" class="dropdown">
            <button class="dropdown-btn">Sep 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="okt" class="dropdown">
            <button class="dropdown-btn">Okt
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="nov" class="dropdown">
            <button class="dropdown-btn">Nov 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>

        <div id="dec" class="dropdown">
            <button class="dropdown-btn">Dec 
                <i id="up" class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <p>content</p>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>



        </body>


    <script src="agenda.js">></script>
</html>