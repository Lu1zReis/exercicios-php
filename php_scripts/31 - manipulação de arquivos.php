<?php
// Manipulação de Arquivos
/*
	fopen()
	fclose()
	fwrite()
	!feof()
	fgets()
	filesize()
*/

	$arquivo = 'arquivo.txt';
	$conteudo =  "Conteudo de Teste\r\n";// Conteudo que vai ser adicionado no arq.txt

	//$tamanhoArquivo = filesize($arquivo, 'r'); // r é para ler

	$arquivoAberto = fopen($arquivo, 'a');// Para abrir

 fwrite($arquivoAberto, $conteudo);// Escreve

	//para percorrer e exibir as linhas do arquivo.txt 
	/*while (!feof($arquivoAberto)):
		$linha = fgets($arquivoAberto, $tamanhoArquivo);
		echo $linha;
	endwhile;
*/
	fclose($arquivoAberto);// Para fechar
