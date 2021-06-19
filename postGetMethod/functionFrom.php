<?php 
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input($_POST["name"]);
  $email = input($_POST["email"]);
  $website = input($_POST["website"]);
  $comment = input($_POST["comment"]);
  $gender = input($_POST["gender"]);
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
