<?php
// sessão
session_start();
if(isset($_SESSION['mensagem'])): // se existir essa sessão ele vai entrar nessa condição
	echo $_SESSION['mensagem']; // para exibirmos esses dados
endif;
session_unset(); // para limparmos os dados que serão exibidos na página depois de atualizarmos 

// conexão
include_once 'php_action/db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
</head>
<body>
	<center>
		<! - Parte que vai listar todos os clientes //->
		<h3>Clientes</h3>
		<table bgcolor="lavender">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM usuario"; // essa parte vai pegar todos os dados da tabela 'usuario'

				$resultado = mysqli_query($connect, $sql); // aqui vai fazer a conexão para pegar esses resultados

				while($dados = mysqli_fetch_array($resultado)): // aqui vamos transferir esses dados em array para dados enquanto conta essas passagens no 'while'
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobrenome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['idade']; ?></td>

					<td><a href="editar.php?id= <?php echo $dados['id']; ?>">editar</a></td>

					<td><a href="php_action/delete.php?delete= <?php echo $dados['id'] ?>">excluir</a></td>
				</tr>

				<?php endwhile; // vamos passar essa parte para depois pararmos de exexutar esse looping na tabela?>

			</tbody>

			<tfoot>
				<tr>
					<td>
						<a href="adicionar.php">Adicionar cliente</a>
					</td>
				</tr>
			</tfoot>
		</table>
	
	</center>
</body>
</html>