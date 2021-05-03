<?php
// sessão
session_start();

// conexão
require_once 'db_connect.php';

// Verificação
if(!isset($_SESSION['logado'])):
	header("Location: index.php"); // vamos usar esse código para o usuário não passar para uma página restrita pelo link
endif;

// dados
$id = $_SESSION['id_usuario']; // essa var vai receber os valores passados na index.php

$sql = "SELECT * FROM usuarios WHERE id = $id"; // aqui vai selecionar tudo da tabela usuarios, no campo do id 1 

$resultado = mysqli_query($connect, $sql); // aqui vai receber esses valores, usando a conexão($connect) e depois entrando para pegar esses valores($sql)

$dados = mysqli_fetch_array($resultado); // aqui vai receber esses valores na forma de array, podendo passar por campos, como:
/*
$dados['nome'];
$dados['senha'];
$dados['login']
*/
mysqli_close($connect); // fechar a conexão com o banco de dados já que já pegamos as informações e armazenamos nas variaveis
?>

<!DOCTYPE html>
<html>
<head>
	<title>Página restrita</title>
</head>
<body>
<h4>Olá <?php echo $dados['login'] ?></h4>
<a href="logout.php">Sair</a>
</body>
</html>