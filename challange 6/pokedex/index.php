<?php
 // connect to database
 $conn = mysqli_connect('localhost', 'jasper', 'Jaspertje08', 'pokedex');

 // chechk connection
 if(!$conn){
     echo 'Connection error: ' . mysqli_connect_error();
 } 

 //write query for all products
 $sql = 'SELECT id, name, power, gender FROM data';

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

<?php foreach($kantine as $product): ?>

    <div id="<?=$product['id'];?>" class="data">

        <img src="images/<?= $product['id'];?>.png" alt="" width="200px" height="200px">

            <div class="align">
                <p class="id">#<?= $product['id']; ?></p>
            </div>

            <div class="align1">
                <p1 class="name"><?= $product['name']; ?></p1>
            </div>
                
            <div class="align2">
                <p2 class="power"><?= $product['power']; ?></p2>
            </div>	
                
            <div class="align3">
                <p3 class="gender"><?= $product['gender']; ?></p3>
            </div>

 

</div>

<?php endforeach; ?>


</div>



</body>
</html>