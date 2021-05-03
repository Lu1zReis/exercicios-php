<!DOCTYPE html>
<html>
<head>
	<title>While and Do While</title>
</head>
<body>

<?php
$contador = 1;
while ($contador <= 10) {
	echo "Contador é $contador <br>";
	$contador++;
}

echo "<hr>";
	$contador = 1;

do {
	echo "Contador é $contador <br>";
	$contador++;
}while ($contador <= 10) 

?>

</body>
</html>