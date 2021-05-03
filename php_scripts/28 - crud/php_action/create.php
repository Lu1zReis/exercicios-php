<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';
//clear
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;
}

if (isset($_POST['btn-cadastrar'])):

//vamos filtrar os dados inseridos
	$nome = clear($_POST['nome']);
		$sobrenome = clear($_POST['sobrenome']);
			$email = clear($_POST['email']);
				$idade = clear($_POST['idade']);

// essa funcionalidade que vai incluir no banco de dados da tabela 'clientes'
	$sql = "INSERT INTO cliente (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

//se conseguimos adicionar no banco de dados
	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com Sucesso";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');

	endif;
endif;
