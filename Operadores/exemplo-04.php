<?php

$a = 30;

$b = 55;

var_dump($a > $b); // Verificando se $a é maior que $b

echo "<br>";

var_dump($a < $b); //Verificando se $a é menor que $b

echo "<br>";

var_dump($a = $b); // Apenas um sinal de igual é atribuição de valor | Linha comentada para execução da linha abaixo

echo "<br>";

var_dump($a == $b); //Dois sinais de igual significa comparar valores, não de tipo

echo "<br>";

$a = 55; // Mudando o valor de $a para poder verificar se é igual $b

var_dump($a == $b);

$a = 55.0;

echo "<br>";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b); // Comparação de valores e tipos

echo "<br>";

var_dump($a != $b); // Checando se o valor de $a é diferente de $b!

echo "<br>";

var_dump($a !== $b); // 



?>