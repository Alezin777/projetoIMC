<?php 
	
	function imcCalc($altura, $peso) {
		return ($peso / ($altura * $altura));
	}

	$nome = 'Ale';
	$peso = 63.00;
	$altura = 1.69;

	$resp = imcCalc($altura, $peso);
	printf("$nome seu peso $peso e sua altura $altura ideal é %.2f", $resp);

 ?>