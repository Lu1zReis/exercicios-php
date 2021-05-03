<?php
// Conexão com o banco de dados
$servername = "localhost"; // para localizar o servidor(nesse caso local)
// parte de login:
$username = "root"; // o username que usamos
$password = ""; // a senha que usamos
// banco de dados que usaremos:
$db_name = "conectar2.0";

// a conexão que usaremos para o banco de dados '$connect' vai ser a variavel que vai receber os dados
// e a funcao 'mysqli_connect' que vai ser de verdade a conectora com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexão: ".mysqli_connect_error();
endif;
