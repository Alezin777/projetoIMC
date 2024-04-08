<?php 
	$quant = 3;
	$altura1 = 1.70;
	$altura2 = 1.60;
	$altura3 = 1.50;

	$maioraltura = 0;
	$menoraltura = 0;

	$media = 0;
	$soma = 0;

	if ($altura1 > $altura2 && $altura1 > $altura3 ){
		$maioraltura = $altura1;
	}elseif ($altura2 > $altura1 && $altura2 > $altura3){
		$maioraltura = $altura2;
	}elseif ($altura3 > $altura1 && $altura3 > $altura2){
		$maioraltura = $altura3;
	}

	if ($altura1 < $altura2 && $altura1 < $altura3){
		$menoraltura = $altura1;
	}elseif ($altura2 < $altura1 && $altura2 < $altura3){
		$menoraltura = $altura2;
	}elseif ($altura3 < $altura1 && $altura3 < $altura2){
		$menoraltura = $altura3;
	}

	echo "esta é a maior altura ". $maioraltura . " e esta é a menor altura " . $menoraltura . "<br>";

	function Media($altura1, $altura2, $altura3, $quant){
		$soma = $altura1 + $altura2 + $altura3;
		$media = ($soma / $quant);
	}

	Media($soma, $quant);
	printf("A media de altura de mulheres é " . $media);
	

 ?>