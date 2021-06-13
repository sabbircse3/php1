<?php 
$n = 15;
function recursive($n){
	if ($n == 0) {
		return 0;
	} 
		elseif ($n == 1) {
			return 1;
		}
		else{
			return (recursive($n-1) + recursive($n-2));
		}

}

for ($i=0; $i < $n; $i++) { 
	echo recursive($i);
	echo "_"."\n";
}
 ?>