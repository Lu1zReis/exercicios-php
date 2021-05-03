<!DOCTYPE html>
<html>
<head>
	<title>Sanitização</title>
</head>
<body>
<?php
/* SANITIZAÇÃO
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
if (isset($_POST['enviar-formulario'])) {
	//Array de erros
	$erros = array();

	//Sanitize
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

	if (!filter_var($idade, FILTER_VALIDATE_INT)) {
		$erros[] = "Idade Precisa ser um inteiro";
	}

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$erros[] = "Erro no seu e-mail";
	}

	$URL = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

	if (!filter_var($URL, FILTER_VALIDATE_URL)) {
		$erros[] = "URL inválida";
	}

	if (!empty($erros)) {
		foreach ($erros as $erro) {
			echo "<li> $erro </li>";
		}
	}
}
?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

Nome 	<input type="text" name="nome"><br>
idade	<input type="text" name="idade"><br>
E-mail	<input type="text" name="email"><br>
URL		<input type="text" name="url"><br>
<button type="submit" name="enviar-formulario">Enviar</button>	

	</form>

</body>
</html>