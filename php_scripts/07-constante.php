<!DOCTYPE htm>
<html>
<head>
	<title>Hey</title>
</head>
<body>
	<?php
	//constante//elas são globais, diferentes das var's
	define("Login", "hello");
	echo Login;
	print "<hr>";
	//arrays
	define ("times", ["flamengo","palmeiras","santos"]);
	echo times[0];
	print "<br>";

	//vars
	$Senha = "oi";
	print $Senha;

	?>
</body>
</html>