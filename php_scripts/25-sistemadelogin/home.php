<?php
//conexão
require_once 'db_connect.php';

//sessão
session_start();

//Verificação se o usuário logou antes de entrar no home.php
if (!isset($_SESSION['logado'])):
	header('location: index.php');
endif;


//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

mysqli_close($connect);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Restrita</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Olá <?php echo $dados['nome']; ?></h1>
<a href="logout.php">Sair</a>

</body>
</html>