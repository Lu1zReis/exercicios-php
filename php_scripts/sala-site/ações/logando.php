<?php
session_start();

if(isset($_POST['btn-login'])):
	if(empty($_POST['login'])){
		$dados[] = "<li>Por favor adicione um valor no campo login</li>";
	}
	if(empty($_POST['senha'])){
		$dados[] = "<li>Por favor adicione um valor no campo senha</li>";
	}
	if(isset($dados)){
		foreach($dados as $dado) {
			echo $dado."<br>";
		}
		echo "Aviso: <b>Você precisa ser um <i>Administrador</i> para acessar esse recurso</b>";
	}
	if(empty($dados)):
		class Login {
			public $usuario;
			public $senha;

			function __construct($usu, $psw) {
				$this->usuario = $usu;
				$this->senha = md5($psw);
			}

			public function Logando() {
				if($this->usuario == "LuizAdmin" and $this->senha == a3590023df66ac92ae35e3316026d17d):
					$_SESSION['logado'] = true;
					$_SESSION['msg'] = "<li>Logado com sucesso</li>";
					header('Location: ../index.php');

				else:
					$_SESSION['logado'] = false;
					$_SESSION['msg'] = "<li>Desculpe, login ou senha incorretos. Aviso: <b>Você precisa ser um <i>Administrador</i></b></li>";
					header('Location: ../index.php');
				endif;
			}
		}
		$usu = $_POST['login'];
		$psw = $_POST['senha'];

		$login = New Login($usu, $psw);
		$login->Logando();
	endif;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login inválido</title>
</head>
<body>
	<center>
		<p>
			<a href="index.php"><b>Voltar a página inicial</b></a>
		</p>
	</center>
</body>
</html>