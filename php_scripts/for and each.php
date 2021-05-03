<?php

$i = 10;
$a = 9;


for ($contador=0; $contador <= $i ; $contador++) { 
	echo "$a x $contador = ".($a*$contador)."<br>";
}

echo "<hr>";

//o for each será usado para um array!

$cores = array("Verde", "Vermelho", "Azul", "Verde");

foreach ($cores as $indice => $valor) {
	echo $indice."-".$valor."<br>";
}

//o $valor recebe os dados do array, e o $indice mostra a quantidade.