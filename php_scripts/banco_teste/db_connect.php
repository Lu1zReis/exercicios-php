<?php
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "bancocontas";

$connect = mysqli_connect($severname, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão ".mysqli_connect_error();
endif;
?>