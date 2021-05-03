<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Novo Cliente</title>
</head>
<body>
	<center>
		<h3>Adicionar</h3>
		<form action="php_action/create.php" method="POST">
			Nome: <input type="text" name="nome"><br>
			Sobrenome:<input type="text" name="sobrenome"><br>
			Email:<input type="text" name="email"><br>
			Idade:<input type="text" name="idade"><br>
			<input type="submit" name="btn-enviar"> -
			<a href="index.php">Lista de cliente</a><br>
		</form>
	</center>
</body>
</html>