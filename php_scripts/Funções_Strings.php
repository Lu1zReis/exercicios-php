<?php
//Funções para Strings
/*	strtoupper = Tudo maiúscula
	strtolower =Tudo Minúscula
	substr = Pode apagar até certa qnt de numero e começar
	str_pad = Pode clcar novos caracteres dpndno do número
	str_repeat = Baiscamente umm laço de repetição para uma mesma palavra
	strlen = Representa a quantidade de carateres que ela tem
	str_replace = Substitui uma palavra específica na frase por outra
	strpos = Informa a palavra, e irá fazer uma contagem de números até ela
*/
	$nome = "Luiz Eduardo Reis Martins";
	$NovoNome = strtolower($nome);
	echo $NovoNome;

	echo "<hr>";
	
	$mensagem = "Olá Mundo!";
	echo substr($mensagem, 4, 7);//o 4 é até onde apaga o valor e o 6, até onde vai ser escrito!

	echo "<hr>";

	$objeto = "mouse";
	$NovoObjeto = str_pad($objeto, 7, "*", STR_PAD_BOTH);
	//podemos colocar tanto para o lado right ou left em STR_PAD_XXX 
	echo $NovoObjeto;

	echo "<hr>";

	$laço = str_repeat("Futebol<br>", 3);
	echo $laço;

	echo "<hr>";

	$a = "Olá Mundo!";
	echo strlen($a);

	echo "<hr>";

	$texto = "Phyton é muito melhor que outras Linguagens!";
	$NovoTexto = str_replace("Phyton", "C++", $texto);
	echo $NovoTexto;

	echo "<hr>";
	echo strpos($texto, "outras");