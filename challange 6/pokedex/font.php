<?php
$base = "https://pokeapi.co/api/v2/pokemon/";
$type = "https://pokeapi.co/api/v2/pokemon-species/";

for($id = 1; $id < 10; $id++){
    $data = file_get_contents($base.$id.'/');
    $pokemon = json_decode($data);
    echo $pokemon->name."<br>";
    $data1 = file_get_contents($base.$id.'/');
    $pokemon1 = json_decode($data1);
    echo $pokemon1->type->name."<br>";
}

?>