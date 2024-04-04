<?php 
// Ler 2 números
// Menor  ou  igual  a  20, -5
// Maior que 20, +8

$num1 = 20;
$num2 = 5;
$soma = 0;
$resultado = 0;

function soma($n1, $n2) {
	$soma = $n1 + $n2;
	return $soma;
}

$soma = soma($num1, $num2);

if ($soma <= 20) {
	$resultado = $soma - 5;
	echo $resultado;
} else {
	$resultado = $soma +8;
	echo $resultado;
}

 ?>