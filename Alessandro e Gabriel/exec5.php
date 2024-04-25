<?php 
	$altura1 = 1.70;
	$sexo1 = "F";
	$idade1 = 35;

	$altura2 = 1.60;
	$sexo2 = "F";
	$idade2 = 32;

	$altura3 = 1.50;
	$sexo3 = "H";
	$idade3 = 40;

	$maioraltura = 0;
	$menoraltura = 0;

	$maioridade = 0;
	$menoridade = 0;

	$media = 0;
	$soma = 0;
	$quant = 3;

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

	if ($sexo1 == "F"){
		$soma = $soma + $altura1;
	}
	elseif ($sexo2 == "F"){
		$soma = $soma + $altura2;
	}
	elseif ($sexo3 == "F"){
		$soma = $soma + $altura3;
	}
	$media = $soma / 2;
 
	echo "A media é  $media" . "<br>";

	if ($sexo1 == "F"){
	    if($idade1 > $idade2){
	        $menoridade = $idade1;
	    }
	}
	elseif ($sexo2 == "F"){
	    if($idade2 > $idade1){
	        $menoridade = $idade2;
	    }
	}
	if ($sexo3 == "H"){
	    if($idade3 > $idade2){
	        $maioridade = $idade3;
	    }
	}
	echo "A maior idade masculina é $maioridade e a menor idade feminina é $menoridade "; 
?>