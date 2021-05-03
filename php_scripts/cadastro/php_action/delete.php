<?php

// sessão
session_start();
// conexão
require_once 'db_connect.php';

if(isset($_GET['delete'])):
	if(isset($_POST['btn-deletar'])):
		$deletar = $_POST['opcao'];
		if($deletar == "op1"):
			$id = mysqli_escape_string($connect, $_GET['delete']); // aqui vai pegar o id especifico

		// aqui deletamos os dados
			$sql = "DELETE FROM usuario WHERE id = '$id'";

			if(mysqli_query($connect, $sql)):
				$_SESSION['mensagem'] = "Deletado com sucesso";
				header("Location: ../index.php");
			else:
				$_SESSION['mensagem'] = "Erro ao deletar";
				header("Location: ../index.php");
			endif;
		else:
			$_SESSION['mensagem'] = "Não deletado";
			header("Location: ../index.php");
		endif;
	endif;
endif;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Deletar</title>
</head>
<body>
	<h3>Deletar?</h3>
	<form action="" method="POST">
		<input type="radio" name="opcao" value="op1">SIM<br>
		<input type="radio" name="opcao" value="op2">NÃO<br>
		<input type="submit" name="btn-deletar">
	</form>
</body>
</html>
