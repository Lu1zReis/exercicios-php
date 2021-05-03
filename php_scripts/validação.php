<!DOCTYPE html>
<html>
<head>
	<title>Validação</title>
</head>
<body bgcolor="lavender">

	<center>
		<h1>Registro</h1>
		<hr>
		<form action="" method="POST">
			<table>

				<tr>
					<td>Nome:</td>
				 	<td><input type="text" name="nome"></td>
				</tr>

				<tr>
					<td>Idade:</td>
					<td><input type="text" name="idade"></td>
				</tr>

				<tr>
					<td>Email:</td>
					<td><input type="text" name="email"></td>
				</tr>

				<tr>
					<td>Peso:</td>
					<td><input type="text" name="peso"></td>
				</tr>

				<tr>
					<td>IP:</td>
					<td><input type="text" name="ip"></td>
				</tr>

				<tr>
					<td>URL:</td>
					<td><input type="text" name="url"></td>
				</tr>

				<tr>
					<td><input type="submit" name="enviar"></td>
				</tr>

			</table>
		</form>
	</center>

<?php
// testar se o usuário clicou no link
if(isset($_POST['enviar'])):
	$erros = array();
// validar todos os campos:
	if(empty($_POST['nome'])):
		$erros[] = "Preencha o campo nome";
	endif;

	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade está incorreta";
	endif;

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email está incorreto";
	endif;

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso está incorreto";
	endif;

	if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
		$erros[] = "Endereço de IP está incorreto";
	endif;

	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "Endereço da URL está incorreto";
	endif;
// testar se existe algum erro:
	if (!empty($erros)):
		foreach ($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;	
	else:
		function alert($msg){
    		echo "<script type='text/javascript'>alert('$msg');</script>";
	};
	alert("Os dados estão corretos");
	endif;


endif;

?>

</body>
</html>