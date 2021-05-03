<!DOCTYPE html>
<html>
<head>
	<title>Global</title>
</head>
<body>
	
	<?php
if (isset($_POST['enviar-formulario'])) {
//array de erros
	$erros = array();

//Aqui ia retornar a true se fosse verdade, mas invertemos o valor lógico.
	//validações
	if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
		$erros[] = "precisa ser um número inteiro";
	}
	if (!$email = filter_input(INPUT_POST, 'e-mail', FILTER_VALIDATE_EMAIL)) {
		$erros[] = "precisa colocar seu e-mail";
	}
	if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
		$erros[] = "precisa ser um número com casas flutuantes";
	}
	if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
		$erros[] = "precisa ser um endereço IP";
	}
	if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
		$erros[] = "precisa ser uma URL";
	}

//empty serve para verificar se a var $erros está vazia nesse caso com a exclamação(!) ela inverte o valor, então nesse caso, se tiver com algo, irá mostrar os dados que estão nela
	//exibindo mensagens de erros ou acertos
		if (!empty($erros)) {
		foreach ($erros as $erro) {
			echo "<li> $erro </li>";
		}
	}
		else{
			echo "Dados Enviados com Sucesso!";
		}

}


	?>                                              

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Idade:	<input type="text" name="idade"><br>
	E-mail:	<input type="text" name="e-mail"><br>
	Peso:	<input type="text" name="peso"><br>
	Ip:		<input type="text" name="ip"><br>
	URL:	<input type="text" name="url"><br>
	<button type="submit" name="enviar-formulario">Enviar</button>

</form>
</body>
</html>
