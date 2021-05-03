<?php
require_once 'db_connect.php';

if(isset($_POST['btn-enviar'])):

	$data = $_POST['data'];
	$valor = $_POST['valor'];
	echo "a data informada é: ".date("d/m/Y", strtotime($data))."<br>";
	echo "o valor informado é: $valor<br>";
	/*$sql = "INSERT INTO dados (data, valor) VALUES ('$data', '$valor')";

	if(mysqli_query($connect, $sql)):
		echo "Enviado para o banco de dados";
	else:
		echo "Erro ao enviar ao banco ".mysqli_connect_error();
	endif;
*/
endif;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Data: <input type="date" name="data"><br>
		Valor: <input type="text" name="valor"><br>
		Enviar: <input type="submit" name="btn-enviar"><br><br>
		<button type="submit" name="btn-ver">Mostrar datas</button>
	</form>
	<hr>
</body>
</html>

<?php
if(isset($_POST['btn-ver'])):
	$valorFinal = 0;
	$sql = "SELECT * FROM dados";
	$resultado = mysqli_query($connect, $sql);

	while($dados = mysqli_fetch_array($resultado)):
		echo "<br>";
		echo $dados['id']." : ".$dados['data']." - ".$dados['valor'];
		$valorFinal = $valorFinal+$dados['valor'];
		echo "<hr>";
	endwhile;

	echo "<b>Despesa total: <b>".$valorFinal;


endif;

?>