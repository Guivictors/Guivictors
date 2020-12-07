<?php

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe"); // Aonde a palavra se encontra

var_dump($q);

echo "<br>";

$texto = substr($frase, 0, $q); // Verificando o que tem antes da palavra mãe, até a posição 17

var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q);

var_dump($texto2);

echo "<br>";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //Informando para começãr a partir da palavra $q e falar o que há na frente

var_dump($texto2);



?>