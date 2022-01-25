<?php
 // connect to database
 $conn = mysqli_connect('localhost', 'jasper', 'Jaspertje08', 'pokedex');

 // chechk connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 //write query for all products
 $sql = 'SELECT ID, NAME, POWER FROM data';

 // make query & get result
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
 $kantine = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // close connection
 mysqli_close($conn);

 $hastag = '#';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>



</header>

<body>





<div class="pokedex">

<?php foreach($kantine as $product):  $result = str_replace( array("#", "'", ";"), '', $product['ID']); ?>

    <div id="<?=$product['ID'];?>" class="data">

        <img src="images/<?= $result?>.png" alt="" width="200px" height="200px">

            <div class="align">
                <p class="id"><?= $product['ID'];?></p>
            </div>

            <div class="align1">
                <p1 class="name"><?= $product['NAME']; ?></p1>
            </div>
                
            <div class="align2">
                <p2 class="power"><?= $product['POWER']; ?></p2>
            </div>	
            

 

</div>

<?php endforeach; ?>


</div>



</body>
</html>