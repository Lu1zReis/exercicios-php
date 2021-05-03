<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST">
	<input type="text" name="valor1"><br>
	<input type="text" name="valor2"><br>
	<input type="text" name="valor3"><br>
	<input type="text" name="valor4"><br>
	<input type="text" name="valor5"><br>
	<input type="text" name="valor6"><br>
	<input type="submit" name="enviar">
</form>

</body>
</html>

<?php
if(isset($_POST['enviar'])):

	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$valor3 = $_POST['valor3'];
	$valor4 = $_POST['valor4'];
	$valor5 = $_POST['valor5'];
	$valor6 = $_POST['valor6'];

	$aux = array($valor1, $valor2, $valor3, $valor4, $valor5, $valor6);
	$valores = 0;
	$lista = 0;
	$valorFinal = 0;
	foreach ($aux as $positivo):
		if($positivo > 0):
			$valores += 1;
			$lista = $lista + $positivo;
		endif;
	endforeach;

echo "$valores valores positivos";
$valorFinal = $lista / $valores; 
$valorFinal = number_format($valorFinal, 1, '.', '');
echo "<br>$valorFinal";

endif;
?>