<?php 

//entrar com nome, sexo e idade. 
//pessoa for do sexo feminino e tiver menos que 25 anos, 
//imprimir nome e a mensagem: ACEITA. 
//Caso imprimir: NÃO ACEITA.

$nome = "Lari";
$sexo = "F";
$idade = 25;

function imprimir($nome, $sexo, $idade){
	if ($sexo == "F" && $idade <= 25) {
		echo $nome . " você foi ACEITA";
	} else {
		echo "NÃO ACEITA";
	}
}

imprimir($nome, $sexo,$idade);

 ?>