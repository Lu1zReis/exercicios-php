<?php
//aqui vamos criar o formulário

//Conexão com o banco de dados
require_once 'db_connect.php';

// Sessão
session_start();

//se existe algo no botão enviar
	if (isset($_POST['btn-entrar'])):
	$erros = array();

//essa parte vai se conectar com o servidor, com a var $connect do arquivo db_connect.php que vai buscar os dados no server, e $_POST['login/senha'] que vai verificar se o que o usuário digitou está no banco de dados
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
//aqui ira verificar os erros, e atribuir os dados a var $erros
	if (empty($login) or empty($senha)):
		$erros[] = "<li> o campo login/senha precisa ser preenchido</li>";

	else:
	//a var sql ira buscar os dados do login, da tabela que criamos 'usuarios' que pega o login de la, com o login que o usuario digitou
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);
//verificar se o dado digitado existe lá no banco de dados
		if(mysqli_num_rows($resultado) > 0 ):

			$senha = md5($senha);

			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);
//aqui atribuimos o valor = 1 porque na var sql e resultado iremos verificar se todos os parametros sao verdadeiro, mas se for digitado um valor que nao esta no banco de dados sera falso, entao por isso que igualamos a 1 ou false;
				if (mysqli_num_rows($resultado)==1):
//mysqli_fetch_array vai converter o $resultado em um array para o $dados
					$dados = mysqli_fetch_array($resultado);
					//encerrar a sessão 
					mysqli_close($connect);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
//header é a função que redireciona para outras páginas
					header("location: home.php");
				else:
					$erros[] = "<li> Usuario e senha nao conferem</li>";
			endif;

		else:
			$erros[] = "<li> Usuario inexistente </li>";
		endif;
	endif;
endif;
?>

<!DOCTYPE html>
<html>
<head>  
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>

	<h1> Login </h1><hr>
<?php
//aqui ira verificar se há algum erro
if (!empty($erros)) {
	foreach ($erros as $erro) {
		echo $erro;
	}
}
?>

<form action="" method="POST">
	Login: <input type="text" name="login"><br>
	Senha: <input type="password" name="senha"><br>
	<button type="submit" name="btn-entrar"> Entrar </button>
</form>

</body>
</html>