<?php

//Operadores de Atribuição

$valoTotal = 0; //Declarando valor a variável;

@$valorTotal += '100'; //Adicionando valor a variável


$valorTotal += '25';

echo $valorTotal;

echo "<br>";

@$valorTotal -= '10' . " Desconto"; // Ideia do desconto

echo $valorTotal;

echo "<br>";

@$valorTotal *= '.9' . " Procentagem"; // Ideia da porcentagem

echo $valorTotal;

?>