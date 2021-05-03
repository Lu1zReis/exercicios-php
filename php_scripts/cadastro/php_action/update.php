<?php
// sessão
session_start();
// conexão
require_once 'db_connect.php';
// clear
function clear($input){
	global $connect;

	// html
	$var = mysqli_escape_string($connect, $input);

	// xss
	$var = htmlspecialchars($var);

	return $var;
}

if(isset($_POST['btn-editar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);

	$id = mysqli_escape_string($connect, $_POST['id']); // aqui vai pegar o id especifico do outro arquivo 'editar.php'

// aqui subistituimos os dados
	$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro atualizado com sucesso";
		header("Location: ../index.php");
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header("Location: ../index.php");
	endif;

endif;