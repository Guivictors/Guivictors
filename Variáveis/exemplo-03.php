<?php
//Tipos básicos de varíaveis\\

##//String\\##

$nome = "Hcode";
$site = "www.hcode.com.br";

##//Inteiro\\##

$ano = 1990;

//Ponto flutuante

$salario = 5500.99;

//Booleano

$bloqueado = false;

##############################################################################

##//Tipos compostos de variáveis Array e Objetos\\##

$frutas = array("abacaxi", "laranja", "manga", "banana", "amora", "maca");

//echo $frutas[2];
//var_dump($frutas);

echo "<br>";

$nascimento = new DateTime();

//var_dump($nascimento);

##############################################################################
##//Tipos especiais de variáveis\\##

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

##//Variável com valor vazio\\##

$nulo = null;

//var_dump($nulo);

##//Foi iniciado e não tem valor\\##

$vazio = "";

//var_dump($vazio);







?>