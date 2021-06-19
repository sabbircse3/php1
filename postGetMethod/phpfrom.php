<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>PHP Form Validation Example</h2>
	<p style="color: red;">*required field</p>
	<form action="functionFrom.php" method="post">
		<p>Name: <input type="text" name="name" placeholder="Enter Name"></p>
		<p>E-mail: <input type="text" name="email" placeholder="Ente Email"></p>
		<p>Website: <input type="text" name="website" placeholder="Your website"></p>

		<p>Comment: <textarea name="comment" rows="5" cols="40"></textarea></p>

		<p>Gender: <input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="female"> Female
				<input type="radio" name="gender" value="other"> Other </p>
		<input type="submit" name="" value="Submit"> <br>

	</form>

</body>
</html>

<?php 
include "functionFrom.php";
//include "setPhp.php";
echo "<h2>Your Input</h2>";
//echo $uname;
echo $name;
echo "<br>";
//echo $uemail;
echo $email;
echo "<br>";
//echo $uwebsite;
echo $website;
echo "<br>";
//echo $ucomment;
echo $comment;
echo "<br>";
//echo $ugender;
echo $gender;
 ?>