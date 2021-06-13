<?php 
function checkVate()//function has been declared
{
	$name = "Rakesh";
	$age = 19;

	if ($age >= 18) {
		echo $name . ", you are Eligible for Vote";
	}else
	echo $name . ", you are not elegible for Vote";
}
checkVate();//function has been called
 ?>