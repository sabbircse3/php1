<?php 
 	if (isset($_POST['username'])) {
 		$name = $_POST['username'];
 		echo $name."<br/>";
 	}

 	if (isset($_POST['pass'])) {
 		$name = $_POST['pass'];
 		echo $name;
 	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --> <pre>
		Name: <input type="username" name="username" placeholder="username">
		<!-- <br><br> -->
		Password: <input type="password" name="pass" placeholder="password">
		<input type="submit" name="Log in">
		


	</form>

</body>
</html>