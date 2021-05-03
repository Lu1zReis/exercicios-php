<?php
//encerrando sessão
session_start();
session_unset();
session_destroy();

//redirecionar o usuário para a página de início
header('Location: index.php');

 ?>