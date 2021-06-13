<?php 
	function calculateBill($units){
		$unitCostFirst = 3.50;
		$unitCostSecound = 5.00;
		$unitCostThird = 5.20;
		$unitCostFourth = 6.50;

		if ($units <= 50) {
			$bill = $units * $unitCostFirst;
		}
		elseif ($units > 50 && $units <= 100) {
			$temp = 50 * $unitCostFirst;
			$remainingUnits = $units - 50;
			$bill = $temp + ($remainingUnits * $unitCostSecound);
		}
		elseif ($units > 100 && $units <= 200) {
			$temp = (50 * 3.5) + (100 * $unitCostSecound);
			$remainingUnits = $units -150;
			$bill = $temp + ($remainingUnits * $unitCostThird);
			
		}
		else{
			$temp = (50 * 3.5) + (100 * $unitCostSecond) + (100 * $unitCostThird);
        	$remainingUnits = $units - 250;
        	$bill = $temp + ($remainingUnits * $unitCostFourth);
		}
		return number_format($bill, 2);
	}
	$result = calculateBill(100);
 echo $result;


 ?>