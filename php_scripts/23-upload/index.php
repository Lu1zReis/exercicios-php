<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
<?php
if (isset($_POST['enviar-formulário'])):
	//basicamente aqui vai definir os formatos permitidos
	$formatosPermitidos = array("png", "jpeg", "jpg", "gif");

	//aqui vai mostrar qual é o formato do arquivo
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

	// verificar se a extensão é permitida nos '$formatosPermitidos'
	if (in_array($extensao, $formatosPermitidos)):
		$pasta = "arquivos/"; // para direcionar o arquivo
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid().".$extensao";

		if (move_uploaded_file($temporario, $pasta.$novoNome)):
			$mensagem = "Upload com Sucesso";
		else:
			$mensagem = "Erro";
		endif;
	else:
		$mensagem = "Formato Inválido";
	endif;
	echo $mensagem;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br>
	<input type="submit" name="enviar-formulário">
</form>
<hr>

</body>
</html>