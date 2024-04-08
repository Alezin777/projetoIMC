<?php 
//Entrar com um numero
//É divisivel por 10, 5, 2
//Não é divisivel

$num1 = 100;


if ($num1 % 10 == 0 || $num1 % 5 == 0 || $num1 % 2 == 0) {
	echo "O número " . $num1 . " é divisível";
} else {
	echo "Não é divisível";
}
	


 ?>