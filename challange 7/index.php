<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
</head>
<body>

<div class="content">
	<img src="https://www.motor.nl/wp-content/uploads/2021/12/F1-Max-verstappen-1.jpg">
</div>
	
<div class="formdiv">	
	<form action="/index2.php" method="POST">
		<label>Name:</label> <input type="text" name="Name" id="Name"><br>
		<label>Mail:</label> <input type="text" name="Mail" id="Mail"><br>
		<label>Date:</label> <select name="Date" list="dates" id="Date">
						<datalist id="dates">
								<option>Y/M/D</option>
								<option>2022/03/03</option>
						    <option>2022/03/04</option>
						</datalist>
				  </select><br>
		<input type="Submit" name="Submit" id="Submit" value="next">
	</form>
</div>

</body>
</html>