<?php
// sessão
session_start();
// conexão
require_once 'db_connect.php';
// limpar
function clear($input){
	global $connect;
	// html
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);

	return $var;
}

if(isset($_POST['btn-enviar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);

// id não precisa informar porque ele é A.I.
	$sql = "INSERT INTO usuario (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro feito com sucesso";
		header("Location: ../index.php");
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header("Location: ../index.php");
	endif;

endif;