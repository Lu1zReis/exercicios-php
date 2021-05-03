<?php
// conexão com o server
require_once 'db_connect.php';

// se for requisitado irá entrar nesse sistema
if(isset($_POST['btn-editar'])):

    $texto = $_POST['valor'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>edição</title>
</head>
<body>
	<center>
		Editar texto
		<hr>
	    <form action="cadastroTexto.php" method="POST">
	        <textarea name="areaTexto" style="width: 500px; height: 300px; border-color: blue;"><?php echo $texto; ?></textarea>
	        <input type="submit" name="btn-editou">
	    </form>
	</center>
</body>
</head>
<?php
endif;
?>