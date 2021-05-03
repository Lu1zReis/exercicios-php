<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sala";

//conectar isso com o mysqli
$connect = mysqli_connect($servername, $username, $password, $db_name);

//se existir um erro
if (mysqli_connect_error()) {
	echo "Falha na Conexão".mysqli_connect_error();
}
