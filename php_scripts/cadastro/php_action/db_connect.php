<?php
// conexão com o banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "crud2";

$connect = mysqli_connect($severname, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;