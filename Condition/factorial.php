<?php 
$num = 3;
$factorial = 1;

for ($i=$num; $i >= 1; $i--) { 
	$factorial = $factorial * $i;
}
echo "the factorial of $num is $factorial";

?>
