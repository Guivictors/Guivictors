<?php

$a = 30;

$b = 55;


function valor(){
	global $a, $b;
	var_dump($a == $b);
}

valor();


?>