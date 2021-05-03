<?php
//operadores lógicos
//e (&& - and)
//ou (|| - or)
//negação (!)
//ou exclusivo (xor)

$idade = 17;
$nome = "Luiz";

if(($idade == 17) xor ($nome == "Luiz")):
	echo "True";
else:
	echo "false";
endif;