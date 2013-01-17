<?php.
	//$a = array();
	for ($i=3; $i < 1000; $i++) { 
		if ($i%3 == 0 || $i%5 == 0) {
			//array_push($a, $i);
			$sum+=$i;
		}
	}
	//echo "чыслицо = " . array_sum($a);
	echo $sum;
?>

