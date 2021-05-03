<?php
//explode; transforma em array
$name1 = "como vai?";
$test = explode(" ", $name1);
print_r($test);

echo "<hr>";

//implode; desfaz um array
$nome1 = array("Luiz","Bia","Ana");
$teste = implode(", ", $nome1);
print_r($teste);
