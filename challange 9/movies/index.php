<?php

$films = array();

 // connect to database
 $conn = mysqli_connect('localhost', 'root', '', 'vista');

 // chechk connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 //write query for all products
 $sql = 'SELECT * FROM all_movies';

 // make query & get result
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
     $filmlink = $row['movieFile'];
     array_push($films, $id.'[]'.$name.'[]'.$genre.'[]'.$plot.'[]'.$year.'[]'.$duration.'[]'.$filmID.'[]'.$poster.'[]'.$filmlink);
   }
}
 // close connection
 mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<header>

<div>
    <img class="logo" src="images/vista.png" alt="" width="100px" height="100px">
    <h1>Movies</h1>
</div>

</header>



<body>

<div class="search-div">
    <input class="searchbar" type="text" placeholder="Search.." name="search">
    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
</div>

    
<div class="sidenav">       
            <br> <br> <br> <br>
        <a class="movies-btn" href="/VistaMovies/movies/">Movies</a>
            <br> <br> <br>
        <a class="mylist-btn" href="/VistaMovies/mylist">My List</a>
            <br> <br> <br>
        <a class="rewatch-btn" href="/VistaMovies/rewatch">Rewatch</a>
</div>

<div class="movies-div">
    <?php 
    $countar = count($films);
    for ($i=0; $i < $countar; $i++) { 
        $fl = explode("[]", $films[$i]);
        echo '<div class="huge-div" id="huge-id">
                <div class="adult-poster-div">
                    <div class="child-poster-div" id="'.$fl[0].'">
                                <div class="posters">
                                    <img src="'.$fl[7].'" alt="" width="200px" height="300px">
                                </div>

                                <div class="poster-back">
                                        <br>
                                    <div id="text-movie">
                                        <h2>'.$fl[1].'</h2>
                                            <br>
                                        <p>'.$fl[2].'</p>
                                            <br>
                                        <p>'.$fl[3].'</p>
                                            <br>
                                        <p>'.$fl[4].'</p>
                                            <br>
                                        <p>'.$fl[5].'</p>
                                    </div>
                                </div>
                    </div>

                                <div id="btns">
                                    <div id="abc">
                                        <button class="trailer-btn"><a id="play" class="fa fa-play" href="'.$fl[8].'"></a></button>
                                    </div>

                                    <div id="edf">
                                        <button class="add-mylist-btn" type="submit"><a id="heart" class="fa fa-heart"></a></button>
                                    </div>
                                </div>
                </div>
                
              </div>';
    }
    ?>
</div>    








</body>




</html>