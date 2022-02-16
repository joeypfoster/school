<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	

	<form action="/index2.php" method="POST">
		Name: <input type="text" name="Name" id="Name"><br>
		Mail: <input type="text" name="Mail" id="Mail"><br>
		Date: <select name="Date" list="dates" id="Date">
						<datalist id="dates">
								<option></option>
								<option>2022-03-03</option>
						    <option>2022-03-04</option>
						</datalist>
				  </select>
		<input type="Submit" name="Submit" value="next">
	</form>
</body>
</html>