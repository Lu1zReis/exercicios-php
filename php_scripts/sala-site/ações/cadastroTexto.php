<?php
require_once 'db_connect.php';
session_start();

if(isset($_POST['enviar_textos'])):

	class Conexão {
		public $texto;

		function __construct($texto) {
			$this->texto = $texto;
		}

		public function bancoDados($connect, $sql, $id) {
			$sql = "UPDATE texto SET dados = '$this->texto' WHERE '$id' = id";

			// conexão com o banco de dados
			if(mysqli_query($connect, $sql)):
				$_SESSION['msg'] = "Valor adicionado com sucesso";
				header('Location: ../index.php');
			else:
				$_SESSION['msg'] = "Erro ao adicionar valor".mysqli_errno();
				header('Location: ../index.php');
			endif;

		}
	}

	if(isset($_POST['area_trabalhos'])){
		$id = 1;
		$texto = $_POST['area_trabalhos'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

	if(isset($_POST['area_projetos'])){
		$id = 2;
		$texto = $_POST['area_projetos'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

	if(isset($_POST['area_encontro'])){
		$id = 3;
		$texto = $_POST['area_encontro'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

	if(isset($_POST['area_provas'])){
		$id = 4;
		$texto = $_POST['area_provas'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

	if(isset($_POST['area_materias'])){
		$id = 5;
		$texto = $_POST['area_materias'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

	if(isset($_POST['area_noticia'])){
		$id = 6;
		$texto = $_POST['area_noticia'];
		$conexão = new Conexão($texto);
		$conexão->bancoDados($connect, $sql, $id);
	}

endif;
