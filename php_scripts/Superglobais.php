<!DOCTYPE html>
<html>
<head>
	<title>Super Globais</title>
</head>
<body>
<?php

//Super Globais
/*
	$GLOBALS = Ela consegue acessar uma var de qualquer lugar do script.
	$_SERVER

	$_POST
	$_GET


	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
*/
//////////////////////////////////////////////////
$x = 10;
$y = 15;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";
///////////////////////////////////////////////////

//alguns indices do $_SERVER:

echo $_SERVER['PHP_SELF']."<br>";//Vai retornar o nome do arquivo que está sendo executado.

echo $_SERVER['SERVER_NAME']."<br>";//retornar o nome do hoost do servidor, aonde o script está sendo executado.

echo $_SERVER['SCRIPT_FILENAME']."<br>";//Caminho absoluto da onde o script está sendo executado.

echo $_SERVER['DOCUMENT_ROOT']."<br>";//Diretório raiz do script em execução

echo $_SERVER['SERVER_PORT']."<br>";//Vai retornar a porta do servidor web

echo $_SERVER['REMOTE_ADDR']."<br>";//endereço IP de onde o usuário está visualizando a página.

///////////////////////////////////////////////////



?>
</body>
</html>