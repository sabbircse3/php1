<?php 
$uname = $uemail = $uwebsite= $ucomment = $ugender = " ";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (empty($_POST['name'])) {
	$uname = $_POST['name'];
	// echo $uname ."<br/>";
	}else {
    $uname = input($_POST["name"]);
  	}

	if (empty($_POST['email'])) {
	$uemail = $_POST['email'];
	// echo $uemail ."<br/>";
	}else {
    $uemail = input($_POST["email"]);
    }

	if (empty($_POST['website'])) {
	$uwebsite = $_POST['website'];
	// echo $uwebsite ."<br/>";
	}else {
    $uwebsite = input($_POST["website"]);
    }

	if (empty($_POST['comment'])) {
	$ucomment = $_POST['comment'];
	// echo $ucomment ."<br/>";
	}else {
    $ucomment = input($_POST["comment"]);
    }

	if (empty($_POST['gender'])) {
	$ugender = $_POST['gender'];
	// echo $ugender ."<br/>";
	}else {
    $ugender = input($_POST["gender"]);
    }
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}








/* 
if (isset($_POST['name'])) {
	$uname = $_POST['name'];
	// echo $uname ."<br/>";
}

if (isset($_POST['email'])) {
	$uemail = $_POST['email'];
	// echo $uemail ."<br/>";
}

if (isset($_POST['website'])) {
	$uwebsite = $_POST['website'];
	// echo $uwebsite ."<br/>";
}

if (isset($_POST['comment'])) {
	$ucomment = $_POST['comment'];
	// echo $ucomment ."<br/>";
}

if (isset($_POST['gender'])) {
	$ucomment = $_POST['gender'];
	// echo $ucomment ."<br/>";
}
*/





 ?>
