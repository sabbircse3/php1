<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="Exercise-4.php" method="POST" accept-charset="utf-8">
		<input type="text" name="name">
		<input type="submit" name=" Submite Name">
	</form>

	<?php 
	$name = $_POST['name'];
	echo "<h3> Hello $name </h3>";
	 ?>
	
</body>
</html>