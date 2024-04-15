<?php 
	$quant = 3;
	$altura1 = 1.70;
	$sexo1= "F";
 
	$altura2 = 1.60;
	$sexo2= "F";
 
	$altura3 = 1.50;
	$sexo3= "H";
 
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

	echo "a media é  $media";
?>