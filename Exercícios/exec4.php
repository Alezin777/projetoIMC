<?php 

	$n1 = 25;
	$n2 = 15;
	$n3 = 50;
	$memory = 0;

	if ($n1 > $n2) {
		$memory = $n1;
		$n1 = $n2;
		$n2 = $memory;
	}

	if ($n2 > $n3) {
		$memory = $n2;
		$n2 = $n3;
		$n3 = $memory;
	}

	echo $n1 . " " . $n2 . " " . $n3;

 ?>