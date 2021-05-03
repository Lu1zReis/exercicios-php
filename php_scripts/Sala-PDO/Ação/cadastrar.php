<?php
session_start();
require_once '../vendor/autoload.php';

if(isset($_POST['cad-cadastrar'])):

	// vamos criar variaveis para receber os dados vindo do formulário do cadastro
	$login = $_POST['cad-login'];
	$senha = $_POST['cad-senha'];
	$email = $_POST['cad-email'];
	$erros = array();

	// vamos fazer testes para ver se tudo digitado está correto
	if(empty($login)){
		$erros[] = "<li>Por favor preencha o campo login</li>";
	}

	if(empty($senha)){
		$erros[] = "<li>Por favor preencha o campo senha</li>";
	}

	if(empty($email)){
		$erros[] = "<li>Por favor preencha o campo email</li>";
	}

	foreach ($erros as $erro) {
		echo $erro;
	}

	$usuario = new App\Model\Usuario();
	$usuarioDao = new App\Model\UsuarioDao();
	
	// se estiver tudo certo, vai entrar nessa condição
	if(empty($erros)):
		// vamos verificar se o e-mail está correto
		if($usuario->setEmail($email)):

			$usuario->setLogin($login);
			$usuario->setSenha($senha);

			$usuarioDao->Create($usuario);
			$_SESSION['msg'] = "Nova conta cadastrada com sucesso";

			header('Location: ../index.php');


		else:
			echo "Email inválido";
		endif;

	endif;
endif;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Cadastro</title>
    <link rel="shortcut icon" type="image/x-jpg" href="../imagens/if_logo.png" width='25px'>
</head>
<body>

	<div id="menu">
	    <center>
	        <table>

	            <tr align="center">
	                <td width="300px">
	                    <a href="https://academico.ifmt.edu.br/">
	                        <img src="../imagens/estudo_icone.jpg" width="60px" height="45px"><br>Q-Acadêmico
	                    </a>
	                </td> 
	                <td width="400px">
	                    <a href="entrar.php">
	                        <img src="../imagens/user-icon-image-placeholder.jpg" width="60px" height="45px"><br>Perfil
	                    </a>
	                </td>
	                <td width="300px">
	                    <a href="../index.php">
	                        <img src="../imagens/homeLaranja.png" width="60px" height="45px"><br>Home
	                    </a>
	                </td>
	            </tr>

	        </table>
	    </center>
	</div>

    <div id="Geral">
        <h2><font color="orange">Cadastrar...</font></h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <table align="center" bgcolor="orange" cellpadding="8px">
                <tr>
                    <td><b>Login</b></td>
                    <td><input name="cad-login" type="text"></td>
                </tr>
                <tr>
                    <td><b>Senha</b></td>
                    <td><input name="cad-senha" type="password"></td>
                </tr>
                <tr>
                   	<td><b>E-mail</b></td>
                    <td><input name="cad-email" type="text"></td>
                </tr>
                <tr>
                    <td><button name="cad-cadastrar" type="submit">Cadastrar</button></td>
                </tr>

            </table>
        </form>

    </div>

</body>
</html>