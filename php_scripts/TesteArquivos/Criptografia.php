<?php
function gerandoSenha(){
	$password = array();
	$i = 0;
	while ($i < 10000) {
	 	$i = $i + 1;
	 	$pwd = $i;
	 	$password[] = $pwd;
	 }
	 return $password; 
}

function quebrandoSenha(){
	$pwd = gerandoSenha();
	$arquivo = getcwd().'/facil.zip';
	$destino = getcwd().'/';

	foreach ($pwd as $c) {
		$zip = new ZipArchive;
		$zip -> open($arquivo);
		$zip -> extractTo($destino);
		echo "Força Bruta<br>";
		return $c;
	}

}

echo "A senha é:<br>";
echo quebrandoSenha();


?>