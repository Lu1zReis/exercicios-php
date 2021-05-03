<?php
// conexão com o server
require_once 'db_connect.php';
// sessão
session_start();

if(isset($_POST['btn-editou'])):
	$texto = $_POST['areaTexto'];

	// atribuindo os valores que forem passados no banco de dados
	$sql = "UPDATE texto SET dados = '$texto'";

	// fazendo a conexão
	if(mysqli_query($connect, $sql)):
		$_SESSION['msg'] = "Valor adicionado com sucesso";
		header('Location: index.php');
	else:
		$_SESSION['msg'] = "Erro adicionar valor";
		header('Location: index.php');
	endif;
endif;