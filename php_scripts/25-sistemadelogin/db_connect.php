<?php
//conexão com o banco de dados:

//vai ser aonde esta o servidor que vai utilizar
$servername = "localhost";
//o username do servidor que esta acessando
$username = "root";
//a senha, que nesse caso nao tem
$password = "";
//o banco de dados que criamos
$db_name = "sistemalogin";

//conectar isso com o MySql e seu estillo que é o mysqli
$connect = mysqli_connect($servername, $username, $password, $db_name);

//se existir um erro
if (mysqli_connect_error()) {
	echo "Falha na Conexão".mysqli_connect_error();
}
