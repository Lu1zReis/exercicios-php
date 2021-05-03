<?php
//local da senha
$senha = "teste";

//senha com entrada e saída
$novasenha = base64_encode($senha);
echo "Base 64: ".$novasenha."<br>";
echo "Sua senha é: ".base64_decode($novasenha);

echo "<hr>";

/*senha com mão única, isso quer dizer que por exemplo no
banco de dados iremos colocar um desses atributos lá na senha
do banco de dados e no arquivo php colocamos para codificar
e assim enviar enviar para o banco de dados para comparar*/

echo "Md5: ".md5($senha)."<br>";
echo "Sha1: ".sha1($senha);
?>