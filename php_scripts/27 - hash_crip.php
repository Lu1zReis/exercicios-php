<?php
$senha = "123456";
//é bom colocar no banco com caracteres de 255, porque gera bastante cacteres
/*
podemos usar um array, para a senha ficar mais forte, só que o custo dela, ela usará mais o hardware

$options = [
	'cost' => 10;
]; 
*/
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT//,$options
);
echo $senhaSegura."<hr>";

/**************************************/
//com essa função abaixo que vamos comparar os dados do usuário do banco de dados por exemplo
$senha_db = '$2y$10$UEydNRUk6UFejyU0Q.qMce5OCETXOYw8Wt/yU1jPOFPWs9nW.cN/i';
//aqui vai verificar a senha digitada com a do banco de dados e retornar um valor
if (password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha invalida";
endif;