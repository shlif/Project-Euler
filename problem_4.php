<?php

$x=999;
$y=999;
$a = array();

for ($i=100; $i < $x; $i++) { 
	for ($c=100; $c < $y; $c++) { 
		$r=$i*$c;
		$v=strrev($r);
		if ($r == $v) {
			$a[] = $r;
		}	
	}
}

echo max($a);

?>

