<?php
// conexão
include_once 'php_action/db_connect.php'; // incluindo a conexão com o banco de dados
// select
// verificando se há algo na superglobal $_GET['id']
if(isset($_GET['id'])):
	// filtrando a entrada do 'id'
	$id = $_GET['id'];

	$sql = "SELECT * FROM usuario WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Cliente</title>
</head>
<body>
	<center>
		<h3>Editar</h3>
		<form action="php_action/update.php" method="POST">

			<input type="hidden" name = "id" value="<?php echo $dados['id'];?>">
			Nome: <input type="text" name="nome"><br>
			Sobrenome:<input type="text" name="sobrenome"><br>
			Email:<input type="text" name="email"><br>
			Idade:<input type="text" name="idade"><br>
			<input type="submit" name="btn-editar">

			<a href="index.php">Lista de cliente</a><br>
			
		</form>
	</center>
</body>
</html>
