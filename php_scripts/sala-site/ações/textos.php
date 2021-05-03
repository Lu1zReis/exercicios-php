<?php
require_once 'db_connect.php';
$sql = "";
class bancoDados {
    public $texto;

    public function Conexão($connect, $sql, $id) {
        $sql = "SELECT * FROM texto WHERE '$id' = id";
        $resultado = mysqli_query($connect, $sql);

        $this->texto = mysqli_fetch_array($resultado);
    }

    public function getTexto() {
        echo $this->texto['dados'];
    }
}

$banco_dados = new bancoDados();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../estilo.css">
	<title>Edicão de texto</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=700, initial-scale=1">

</head>
<body>
	<div id='central'>
		<center>
			<form action="cadastroTexto.php" method="POST">
				<p>Trabalhos</p>
				<textarea name="area_trabalhos" style="width: 500px; height: 300px; border-color: red">
					<?php
					$id = 1; 
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?> 
				</textarea>

				<br>

				<p>Projetos</p>
				<textarea name="area_projetos" style="width: 500px; height: 300px; border-color: blue">
					<?php
					$id = 2; 
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?> 
				</textarea>

				<br>

				<p>Encontros</p>
				<textarea name="area_encontro" style="width: 500px; height: 300px; border-color: yellow">
					<?php
					$id = 3;
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?>
				</textarea>

				<br>

				<p>Provas</p>
				<textarea name="area_provas" style="width: 500px; height: 300px; border-color: green">
					<?php
					$id = 4;
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?>
				</textarea>

				<br>
				
				<p>Matérias do semestre</p>
				<textarea name="area_materias" style="width: 500px; height: 300px; border-color: orange">
					<?php
					$id = 5;
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?>
				</textarea>

				<br>
				
				<p>Notícias</p>
				<textarea name="area_noticia" style="width: 500px; height: 300px; border-color: black">
					<?php
					$id = 6;
					$banco_dados->Conexão($connect, $sql, $id);
					echo $banco_dados->getTexto();
					?>
				</textarea>

				<br><hr><br>

				<input type="submit" name="enviar_textos">
				
			</form>
		</center>
	</div>
</body>
</html>
<?php
// criar arquivo cadastro.php para passar os dados vindo da área do 'textarea';
// criar banco de dados para armazenar os textos;
