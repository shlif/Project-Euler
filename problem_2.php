<?php

function fibonacci($n)
{
    $sq5 = sqrt(5);
    $a = (1 + $sq5) / 2;
    $b = (1 - $sq5) / 2;
    return (pow($a, $n) - pow($b, $n)) / $sq5;
}

for ($n = 1; $n <= 100; $n++) {
		if (fibonacci($n) < 4000000) {
			if (fibonacci($n)%2 == 0) {
				$sum+=fibonacci($n);
			}
			} else  {
    	break;
    }
}
echo($sum);

?>
