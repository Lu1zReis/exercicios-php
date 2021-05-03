<?php
require_once '../vendor/autoload.php';

$usuarioDao = new App\Model\UsuarioDao();

// abaixo vamos verificar se modificou algo em algum campo
if(isset($_POST['trabalho'])) {
	$usuarioDao->setTextos($_POST['trabalho'], 1);
}

if(isset($_POST['red'])) {
	$usuarioDao->setTextos($_POST['red'], 2);
}

if(isset($_POST['encontros'])) {
	$usuarioDao->setTextos($_POST['encontros'], 3);
}

if(isset($_POST['materias'])) {
	$usuarioDao->setTextos($_POST['materias'], 4);
}

header('Location: ../index.php');