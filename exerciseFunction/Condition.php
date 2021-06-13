<?php 
for($i=10; $i>=0; $i--){
echo $i."<br>";
}

 ?>

 <?php 
 
$t = "najmul";
$x = "Sabbir";

if ($t =="Employ") {
	echo "You are Employ";
	
}elseif ($x == "Employ") {
	echo "You are Employ";
}
else
	echo "you are internship";


  ?>

  <?php 
$t = date("H");

 if ($t < "10") {
 	echo "Have a good morning!";
 }elseif ($t < "20") {
 	echo "Have a good day!";
 }else
 echo "Have a good night!";

   ?>

   <?php 
  $x = date("Tea");

  if ($x > "1") {
  	echo "Tea is cold";
  }elseif ($x < "2"){
  	echo "Tea is hot";
  }else{
  	echo "Tea is not for drink";
  }


    ?>

    <?php 
    $d = date("D");

    if ($d == "Fri") {
    	echo "Have a nice weekend!";
    }else{
    	echo "Go to your Workpalce";
    }
     ?>    
