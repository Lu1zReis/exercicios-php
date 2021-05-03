<?php
//Funções para números
/*
	number_format = basicamente ele formata um número para parecer mais um valor de produto.
	round = Arredonda
	ceil = só arredonda para cima
	floor = arredonda para baixo
	rand = gera um número aleatório, citando um valor inicial e um final
*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.5);

echo "<hr>";

echo ceil(4.1);

echo "<hr>";

echo floor(2.9);

echo "<hr>";

echo rand(1,30);