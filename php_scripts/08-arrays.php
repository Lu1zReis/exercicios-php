<?php
//arrays
$carros = array("Eclipse","camaro","porche");
echo $carros[0];
print "<br>";
echo $carros[2];
print "<br>";
echo $carros[1];
print "<br>";
////////////////////
print "<hr>";
print_r($carros);
print "<hr>";
///////////////////////
$clientes = ["Karol","Bia","Luiz"];
print $clientes[0];
echo "<br>";
print $clientes[1];
echo "<br>";
print $clientes[2];
echo "<hr>";
echo count($clientes);

echo "<hr>";
//uma condicional do tipo for, para rodar todo o array
foreach ($clientes as $key) {
	# code
	echo $key. "<br>";
}
