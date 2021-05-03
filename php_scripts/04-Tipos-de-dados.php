<!DOCTYPE html>
<html>
<head>
	<title> Var's </title>
</head>
<body>

<?php
/***********Escalares**********/
//string
$nome = "Luiz";
var_dump($nome);
if(is_string($nome)):
	print "É uma string";
else:
	print "Não é uma string";
endif;


echo "<hr>";

//int
$age = 10;
var_dump($age);
if(is_int($age)):
	print "É um Int";
else:
	print "Não é uma Int";
endif;

echo "<hr>";

//float
$altura = 1;
var_dump($altura);
if(is_float($altura)):
	print "É Float";
else:
	print "não é float";
endif;

echo "<hr>";

//boolean
$Light = true;
var_dump($Light);
if(is_bool($Light)):
	print "É true";
else:
	print "É false";
endif;

echo "<hr>";

/**********Compostos**********/
//array
$carros = array("Gol", "Uno","Prisma");
var_dump($carros);
echo "<hr>";

/**********Especiais*********/
//NULL
$cidade = NULL;
var_dump($cidade);
echo "<hr>";



?>

</body>
</html>


