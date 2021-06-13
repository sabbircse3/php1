<?php 
function test($n)
{
	$x = 51;
	if ($n > $x) {
		$result = ($n - $x)*3;
		return $result;
	}else
	{
		$result = $x - $n;
		return $result;
	}

}
echo test(53)."<br>";
echo test(30)."<br>";
echo test(52)."<br>"; 


 ?>