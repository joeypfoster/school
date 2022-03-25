<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "VistaMovies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$arrayName = array(
"Spider-Man:%20No%20Way%20Home",
"The%20Battle%20at%20Lake%20Changjin",
"Hi,%20Mom",
"No%20Time%20to%20Die",
"F9",
"Detective%20Chinatown%203",
"Venom:%20Let%20There%20Be%20Carnage",
"Godzilla%20vs.%20Kong",
"The%20Eight%20Hundred",
"Shang-Chi%20and%20the%20Legend%20of%20the%20Ten%20Rings",
"Bad%20Boys%20for%20Life",
"My%20People,%20My%20Homeland",
"Eternals",
"Dune",
"Black%20Widow",
"Tenet",
"Sing%202",
"Free%20Guy",
"Sonic%20the%20Hedgehog",
"A%20Quiet%20Place%20Part%20II",
"Uncharted",
"The%20Batman",
"Encanto",
"Dolittle",
"Jiang%20Ziya",
"Cruella",
"My%20Country,%20My%20Parents",
"Jungle%20Cruise",
"Avengers:%20Endgame",
"Star%20Wars:%20The%20Force%20Awakens",
"Avengers:%20Infinity%20War",
"Jurassic%20World",
"The%20Lion%20King",
"The%20Avengers",
"Furious%207",
"Frozen%20II",
"Avengers:%20Age%20of%20Ultron",
"Black%20Panther",
"Harry%20Potter%20and%20the%20Deathly%20Hallows%20–%20Part%202",
"Jurassic%20World:%20Fallen%20Kingdom",
"Frozen",
"Beauty%20and%20the%20Beast",
"Incredibles%202",
"The%20Fate%20of%20the%20Furious",
"Iron%20Man%203",
"Minions",
"Captain%20America:%20Civil%20War",
"Aquaman",
"Spider-Man:%20Far%20From%20Home",
"Captain%20Marvel",
"Transformers:%20Dark%20of%20the%20Moon",
"Skyfall",
"Transformers:%20Age%20of%20Extinction",
"The%20Dark%20Knight%20Rises",
"Toy%20Story%204",
"Joker",
"Toy%20Story%203",
"Star%20Wars:%20The%20Rise%20of%20Skywalker",
"Rogue%20One:%20A%20Star%20Wars%20Story",
"Aladdin",
"Pirates%20of%20the%20Caribbean:%20On%20Stranger%20Tides",
"Despicable%20Me%203",
"Finding%20Dory",
"Alice%20in%20Wonderland",
"Zootopia",
"The%20Hobbit:%20An%20Unexpected%20Journey",
"Despicable%20Me%202",
"The%20Jungle%20Book",
"Jumanji:%20Welcome%20to%20the%20Jungle",
"Harry%20Potter%20and%20the%20Deathly%20Hallows%20-%20Part%201",
"The%20Hobbit:%20The%20Desolation%20of%20Smaug",
"Bohemian%20Rhapsody",
"Spectre",
"Spider-Man:%20Homecoming",
"Ice%20Age:%20Continental%20Drift",
"The%20Secret%20Life%20of%20Pets");
$arraycount = count($arrayName);
for ($i=0; $i < 80; $i++) { 
	echo $i.":(".$arrayName[$i]."), ";
	$data = file_get_contents("http://www.omdbapi.com/?t=".$arrayName[$i]."&apikey=a13fe11e");
	$DBdata = json_decode($data);

	$name = str_replace("'", "/", $DBdata->Title);
	$year = $DBdata->Year;
	$duration = $DBdata->Runtime;
	$genre = $DBdata->Genre;
	$plot = str_replace("'", "/", $DBdata->Plot);
	$poster = $DBdata->Poster;
	$filmid = $DBdata->imdbID;

	$sql = "INSERT INTO all_movies (id, name, genre, plot, year, duration, filmID, poster, movieFile) VALUES ($i, '$name', '$genre', '$plot', $year, '$duration', '$filmid', '$poster', ' ')";

    // $sql = "DELETE FROM data WHERE ID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// http://www.omdbapi.com/?t=Spider-Man:%20No%20Way%20Home&apikey=a13fe11e