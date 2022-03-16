<?php
	session_start();
	if(!$_SESSION['auth']){
		header('HTTP/1.0 401 Unauthorized');
		header('Location: http://localhost:8888');
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>tetsdsy</p>
</body>
</html>