<?php

$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br>";

$resultado = (10 + 3) / 2;

echo $resultado;

echo "<br>";

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // Tanto quanto a expressão da esquerda antes do & quanto a da direita devem ser verdadeiras, caso não o valor retornará falso

var_dump($resultado);

echo "<br>";

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado);

echo "<br>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // OR Se uma condição for verdadeira retorna verdadeiro

var_dump($resultado);



	

?>