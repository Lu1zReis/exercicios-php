<?php
session_start(); // INICIAR A SESSÃO PARA PEGAR ESSES DADOS DA INDEX.PHP
// PASSAMOS AS VARIAVEIS PARA RECEBER OS DADOS DA $_SESSION['']:
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

echo "Seus dados são<br>";
echo $usuario."<br>";;
echo $senha;

if(isset($_POST['enviar'])): //	SE O USUÁRIOO QUISER ENCERRAR A SESSÃO
	header("Location: logout.php");
endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<button type="submit" name="enviar">Logout</button>
	</form>
</body>
</html>