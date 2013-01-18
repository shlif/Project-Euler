<?php

$a=600851475143;
$firstArg=2;
$lastArg=0;
$arr = array();
/*include("timer.php");
$timer = new timer();
$timer->start_timer();*/

function prime($n)
{	
	$f=0;
	for ($i=2; $i < $n; $i++) {
		if (bcmod($n, $i) == 0) {
			$f++;
			if ($f > 1) {
				break;
			}
		} 
	}
	if ($f > 1) {
		return false;
	} else { 
		return true;
	}
}

for ($i=$firstArg; $i < $a  ; $i++) { 
	if (bcmod($a, $i) == 0) {
		$firstArg=$i;
		$lastArg=bcdiv($a,$firstArg);
		array_push($arr, $firstArg, $lastArg);
		if ($lastArg < $firstArg) {
			break;
		}
	} 
}

rsort($arr);
foreach ($arr as $arr) {
	if (prime($arr)) {
	 	echo $arr, " ", '<br \>';
	 } ;
}

/*$timer = $timer->end_timer();
echo  $timer, "c" ;*/
?>


