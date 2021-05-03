<?php
echo "<form action='formulário.php' method='post'>
	Ensira a mensagem: <input type=text name='texto'><br>
	Ensira o arquivo: <input type=file name='doc'><br>
<input type=submit name='enviar'>
<br>";

function ExibirNome($nome){
	echo "Olá, meu nome é: $nome";
}

ExibirNome("Luiz");

echo "<hr>";

function CalcMedia($aluno, $nota1, $nota2, $nota3){

	echo "<br>";
	$media = ($nota1 + $nota2 + $nota3)/3;
	if ($media >= 6) {
		echo "parabens ao aluno(a) $aluno, sua média foi $media";
	}
	else{
		echo "Aluno(a) $aluno reprovado com a média $media";
	}
}

CalcMedia("João", 4, 7, 5);
CalcMedia("Maria", 5, 7, 5);
CalcMedia("Bia", 7, 7, 5);