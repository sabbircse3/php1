<?php 
function test($x, $y)
{
	if ($x == $y) {
		$result = ($x + $y)*3;
		return $result;
	}else
	{
		$result = $x + $y;
		return $result;
	}
	
}
echo "They are not same valu.". test(1, 2)."<br>";
echo "They are not same valu.". test(3, 2)."<br>";
echo "They are same valu.". test(2, 2)."<br>";  

 ?>