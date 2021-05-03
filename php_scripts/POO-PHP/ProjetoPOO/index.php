<?php
// conexão
require_once 'db_connect.php';
// sessão
session_start();

// se formulário for requisitado ele entrará aqui nessa estrutura de dados
if(isset($_POST['btn-enviar'])):

	// classe para atribuir os valores da tabela
	class Dados {
		private $cor;
		private $anime;
		private $linguagem;
		
		public function __construct($cor, $anime, $linguagem) {
			$this->cor = $cor;
			$this->anime = $anime;
			$this->linguagem = $linguagem;
		}

		public function getCor() {
			return $this->cor;
		}
		public function getAnime() {
			return $this->anime;
		}
		public function getLinguagem() {
			return $this->linguagem;
		}

		public function escolhas() {
			if($this->cor == "red"){
				echo "<li>Vermelho</li>";
			}
			if($this->anime == "madoka"){
				echo "<li>Madoka san</li>";
			}
			if($this->linguagem == "php"){
				echo "<li>Phpzin</li>";
			}
		}

	}

	// entrando dados do formulário
	$cor = $_POST['escolha_cor'];
	$anime = $_POST['escolha_anime'];
	$linguagem = $_POST['escolha_linguagem'];

	// colocando os valores direto na classe
	$dados = new Dados($cor, $anime, $linguagem);
	$dados->escolhas();

endif;

// pegando os dados do banco de dados
$sql = "SELECT * FROM texto";
$resultado = mysqli_query($connect, $sql);

// transformando esses dados em um array
$texto = mysqli_fetch_array($resultado);

// iniciando a sessão
if(isset($_SESSION['msg'])):
	echo $_SESSION['msg'];
endif;
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body bgcolor="lavender">
	<h1 align="center">Escolhas</h1>
	<hr>
		<table align="center" bgcolor="white" bordercolor="black" border="5px">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<tr>
				<td>Qual sua cor favorita?</td>
		        <td>
					<select name="escolha_cor">
		            	<option value="red">Red
		            	<option value="blue">Blue
		        	</select>
				</td>
			</tr>
			<tr>
		        <td>Qual seu anime favorito?</td>
				<td>
		        	<select name="escolha_anime">
		            	<option value="madoka">Madoka
		            	<option selected value="atack_on_titan">Atack on Titan
		        	</select>
		        </td>
			</tr>
			<tr>
		        <td>Qual sua linguagem favorita?</td>
				<td>
					<select name="escolha_linguagem">
						<option selected value="c++">C++
						<option value="php">PHP
					</select>
				</td>
			</tr>
			<tr>
				<td bgcolor="green"><font color="white" >Enviar arquivo</font></td>
		        <td><button type="submit" name="btn-enviar">enviar</button></td>
			</tr>
			</form>
		</table>

		<p><?php echo $texto['dados']; ?></p>
		<form action="texto.php" method="POST">
			<input type="hidden" name="valor" value="<?php echo $texto['dados']; ?>">
			<button name="btn-editar">editar</button>
		</form>

</body>
</html>
