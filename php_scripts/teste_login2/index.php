<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="POST">
		Usuário: <input type="text" name="user"><br>
		Senha: <input type="password" name="pwd"><br>
		<input type="submit" name="enviar-formulario">
	</form>

	<?php
	session_start();
	if(isset($_POST['enviar-formulario'])):

		$usuario = $_POST['user']; // RECEBER OS DADOS DO FORMULÁRIO (USUARIO)
		$senha = $_POST['pwd']; // RECEBER OS DADOS DO FORMULÁRIO (SENHA)

		if($usuario != "Luiz" or $senha != "123"): // TESTAR SE OS DADOS BATEM
			echo "Login incorreto";;
		else:
			// SE PASSAR PELO TESTE, A FUNÇÃO $_SESSION SERÁ USADA PARA RECEBER ESSES DADOS PARA OUTRAS PÁGINAS 
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header("Location: home.php");	
		endif;
	endif;

	?>

</body>
</html