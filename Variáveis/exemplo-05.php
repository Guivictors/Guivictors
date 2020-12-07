<?php

$nome = "Glaucio";

function Teste(){
	global $nome;
	echo $nome;
}

function teste2(){

	$nome = "João";
	
	echo $nome ." Agora no teste 2";
}

Teste();

echo "<br>";

teste2();



// pra fazer função da pra fazer um cadastro e chamar as funções
?>


