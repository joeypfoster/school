<?php
 // connect to database
 $conn = mysqli_connect('localhost', 'root', '', 'test');

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

<body>


<div class="redbarr"><img src="https://icon-library.com/images/pokeball-icon-transparent/pokeball-icon-transparent-9.jpg"></div>


<div class="pokedex">

<?php $id=0; foreach($kantine as $product):  $result = str_replace( array("#", "'", ";"), '', $product['ID']); $id++?>

    <div id="<?=$product['ID'];?>" class="data">

        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $id?>.png?raw" alt="">

            <div class="align">
                <h1 class="idh">ID:</h1>
                <p class="idp"><?= $product['ID'];?></p>
                <h1 class="nameh">NAME:</h1>
                <p class="namep"><?= $product['NAME']; ?></p>
                <h1 class="powerh">POWER:</h1>
                <p class="powerp"><?= $product['POWER']; ?></p>
            </div>
            <div class="aling-info">
                <?php if($product['POWER'] === "grass") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Ground, Rock, Water</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Flying, Poison, Bug, Steel, Fire, Grass, Dragon</p><?php
                }else if($product['POWER'] === "fire") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Bug, Steel, Grass, Ice</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Rock, Fire, Water, Dragon</p><?php
                }else if($product['POWER'] === "water") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Ground, Rock, Fire</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Water, Grass, Dragon</p><?php
                }else if($product['POWER'] === "bug") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Grass, Psychic, Dark</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Fighting, Flying, Poison, Ghost, Steel, Fire, Fairy</p><?php
                }else if($product['POWER'] === "normal") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Nothing</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Rock, Ghost, Steel</p><?php
                }else if($product['POWER'] === "poison") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Grass, Fairy</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Poison, Ground, Rock, Ghost, Steel</p><?php
                }else if($product['POWER'] === "electric") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Flying, Water</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Ground, Grass, Electric, Dragon</p><?php
                }else if($product['POWER'] === "ground") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Poison, Rock, Steel, Fire, Electric</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Flying, Bug, Grass</p><?php
                }else if($product['POWER'] === "fairy") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Fighting, Dragon, Dark</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Poison, Steel, Fire</p><?php
                }else if($product['POWER'] === "fighting") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Normal, Rock, Steel, Ice, Dark</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Flying, Poison, Psychic, Bug, Ghost, Fairy</p><?php
                }else if($product['POWER'] === "psychic") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Fighting, Poison</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Steel, Psychic, Dark</p><?php
                }else if($product['POWER'] === "rock") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Flying, Bug, Fire, Ice</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Fighting, Ground, Steel</p><?php
                }else if($product['POWER'] === "ghost") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Ghost, Psychic</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Normal, Dark</p><?php
                }else if($product['POWER'] === "ice") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Flying, Ground, Grass, Dragon</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Steel, Fire, Water, Ice</p><?php
                }else if($product['POWER'] === "dragon") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Dragon</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Steel, Fairy</p><?php
                }else if($product['POWER'] === "dark") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Ghost, Psychic</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Fighting, Dark, Fairy</p><?php
                }else if($product['POWER'] === "steel") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Rock, Ice, Fairy</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Steel, Fire, Water, Electric</p><?php
                }else if($product['POWER'] === "flying") {
                ?><p class="info-strong">STRONG AGAINST:</p><p><br>Fighting, Bug, Grass</p><br><p class="info-weak">WEAK AGAINST:</p><br><p>Rock, Steel, Electric</p><?php
                }?>
            </div>
            

 

</div>

<?php endforeach; ?>


</div>



</body>
</html>