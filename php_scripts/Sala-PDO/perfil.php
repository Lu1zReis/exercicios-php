<?php
session_start();

if($_SESSION['logado'] == true):
	if(isset($_POST['deslogar'])){
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Perfil</title>
		<link rel="shortcut icon" type="image/x-jpg" href="imagens/if_logo.png" width='25px'>
	</head>

	<body>
	<div id="menu">

	    <center>
	        <table>

	            <tr align="center">
	                <td width="300px">
	                    <a href="https://academico.ifmt.edu.br/">
	                        <img src="imagens/estudo_icone.jpg" width="60px" height="45px"><br>Q-Acadêmico
	                    </a>
	                </td> 
	                <td width="400px">
	                    <a href="Ação/entrar.php">
	                        <img src="imagens/user-icon-image-placeholder.jpg" width="60px" height="45px"><br>Perfil
	                    </a>
	                </td>
	                <td width="300px">
	                    <a href="index.php">
	                        <img src="imagens/homeLaranja.png" width="60px" height="45px"><br>Home
	                    </a>
	                </td>
	            </tr>

	        </table>
	    </center>
	</div>

	<div id="Geral">
		<?php

		require_once 'vendor/autoload.php';
		$usuarioDao = new App\Model\UsuarioDao();

		// aqui utilizamos os dados vindo da sessão nome
		$user = $_SESSION['nome'];
		$Dados = array();

		// pegamos os dados da mesma maneira como foi no entrar.php	
		foreach ($usuarioDao->Logar($user) as $dados):
			$Dados['nome'] = $dados['nome'];
			$Dados['senha'] = base64_decode($dados['senha']);
			$Dados['email'] = $dados['email'];
		endforeach;

		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<table>
				<tr>
					<td width="300px">
						<h2>Nome de Usuário:</h2>
					</td>
					<td width="300px">
						<h2>Senha Cadastrada:</h2>
					</td>
					<td>
						<h2>Email Cadastrado:</h2>
					</td>
				</tr>

				<tr>
					<td bgcolor="orange" align="center">
						<?php echo "<b>".$Dados['nome']."</b>"; ?>
					</td>
					<td bgcolor="orange" align="center">
						<?php echo "<b>".$Dados['senha']."</b>"; ?>
					</td>
					<td bgcolor="orange" align="center">
						<?php echo "<b>".$Dados['email']."</b>"; ?>
					</td>
					<td>
						<button type="submit" name="deslogar" style= "width:90px; height:70px">Deslogar</button>
					</td>
				</tr>
			</table>
		</form>
		<br><br>

		<div id="Temas">
			<b>Perfil</b>/E-mail dos Professores
		</div>
		<h3>
			E-mails dos professores na sequência de A à Z de acordo com a inicial do endereço eletrônico<br>
		</h3>
		<p>A</p>
		<h4>azakuar@hotmail.com - Professor Ataide.</h4>
		<h4>adriano.nascimento@vgd.ifmt.edu.br -Professor Adriano.</h4>
		<h4>anderson.assuncao@vgd.ifmt.edu.br - Professor anderson.</h4>

		<p>B</p>
		<h4>bruno.rodrigues@vgd.ifmt.edu.br - Professor Bruno.</h4>

		<p>D</p>
		<h4>diana.paula@vgd.ifmt.edu.br - Professora Diana.</h4>

		<p>E</p>
		<h4>elielton.reis@vgd.ifmt.edu.br - Professor Elielton.</h4>

		<p>F</p>
		<h4>fabiomarianiifmt@gmail.com - Professor Fábio.</h4>
		<h4>flaviane.alvarez@vgd.ifmt.edu.br - Professora Flaviane.</h4>

		<p>J</p>
		<h4>Jucelinogimenez@yahoo.com.br - Professor Jucelino.</h4>
		<h4>joao.verges@vgd.ifmt.edu.br - Professor João Vitor.</h4>

		<p>K</p>
		<h4>kleber.bignarde@vgd.ifmt.edu.br - Professor Bignarde.</h4>

		<p>I</p>
		<h4>igor.paiva@vgd.ifmt.edu.br - Professor Igor A M Paiva.</h4>

		<p>R</p>
		<h4>rafael.menezes@vgd.ifmt.edu.br - Professor Rafael Brito.</h4>

		<p>S</p>
		<h4>salukicba@gmail.com - Professor Tiago.</h4>

	    <br><br><br><br>

		<div id="Temas">
			<b>Perfil</b>/Matriz Curricular do Curso
		</div>

		<h3>
			Matérias do 1º semestre ao 6º semestre:
		</h3>

		<h4>1º Semestre</h4>

		<ul>
		<li>Biologia I</li>
		<li>Desenho Técnico</li>
		<li>Educação Física I</li>
		<li>Filosofia I</li>
		<li>Gestão Ambiental</li>
		<li>Informática</li>
		<li>Língua Estrangeira I-Inglês</li>
		<li>Língua Portuguesa I</li>
		<li>Matemática I</li>
		</ul>

		<hr>

		<h4>2º Semestre</h4>

		<ul>
		<li>Artes I</li>
		<li>Desenho Arquitetônico I</li>
		<li>Educação Física II</li>
		<li>Geografia I</li>
		<li>História I</li>
		<li>Química I</li>
		<li>Língua Estrangeira I-Espanhol</li>
		<li>Sistemas Construtivos</li>
		<li>Sociologia I</li>
		</ul>

		<hr>

		<h4>3º Semestre</h4>

		<ul>
		<li>Biologia II</li>
		<li>Desenho Assistido Por Computador</li>
		<li>Educação Física III</li>
		<li>Filosofia II</li>
		<li>Língua Estrangeira II-Inglês</li>
		<li>Língua Portuguesa II</li>
		<li>Matemática II</li>
		<li>Materiais de Construção Civil</li>
		</ul>

		<hr>

		<h4>4º Semestre</h4>

		<ul>
		<li>Artes II</li>
		<li>Desenho Estrutural</li>
		<li>Desenho Topográfico</li>
		<li>Física I</li>
		<li>História II</li>
		<li>Língua Portuguesa III</li>
		<li>Língua Estrangeira II-Espanhol</li>
		<li>Solos</li>
		<li>Sociologia II</li>
		</ul>

		<hr>

		<h4>5º Semestre</h4>

		<ul>
		<li>Educação Física IV</li>
		<li>Filosofia III</li>
		<li>Geografia II</li>
		<li>Instalções Elétricas</li>
		<li>Instalções Hidráulicas</li>
		<li>Língua Portuguesa IV</li>
		<li>Matemática III</li>
		<li>Orçamento de Obras</li>
		<li>Qualidade na Construção Civil</li>
		</ul>

		<hr>

		<h4>6º Semestre</h4>

		<ul>
		<li>Artes III</li>
		<li>Direito de Construir</li>
		<li>Física II</li>
		<li>Gereniamento de Canteiro de Obras</li>
		<li>História III</li>
		<li>Língua Brasileira de Sinais - Libras</li>
		<li>Planejamento de Obras</li>
		<li>Química II</li>
		<li>Segurança do Trabalho</li>
		<li>Sociologia III</li>
		</ul>

		<?php
		// aqui usamos a sessão id para darmos permissão ao usuário com id == 1
		if($_SESSION['id'] == 1):
		?>
			<div id="Temas">
				<b>Perfil</b>/Administrador
			</div>

			<center>
				<form action="Ação/update.php" method="POST">
					<h3>Trabalhos</h3>
					<textarea name="trabalho" style="width: 500px; height: 300px; border-color: orange">
						<?php 
						// usamos basicamente a mesma estrutura em cada caso
						foreach ($usuarioDao->getTextos(1) as $texto) {
							echo $texto['dados'];
						}
						?>
					</textarea>

					<hr>

					<h3>Projetos do RED</h3>
					<textarea name="red" style="width: 500px; height: 300px; border-color: orange">
						<?php 
						foreach ($usuarioDao->getTextos(2) as $texto) {
							echo $texto['dados'];
						}
						?>
					</textarea>

					<hr>

					<h3>Web Encontros</h3>
					<textarea name="encontros" style="width: 500px; height: 300px; border-color: orange">
						<?php 
						foreach ($usuarioDao->getTextos(3) as $texto) {
							echo $texto['dados'];
						}
						?>
					</textarea>

					<hr>

					<h3>Matérias do Semestre</h3>
					<textarea name="materias" style="width: 500px; height: 300px; border-color: orange">
						<?php 
						foreach ($usuarioDao->getTextos(4) as $texto) {
							echo $texto['dados'];
						}
						?>
					</textarea>

					<br><br>

					<button type="submit" name="btn-atualizou">Atualizar</button>
				</form>

			</center>

		<?php 
		endif;
		?>	

	</div>

	</body>
	</html>
<?php

else:
	header('Location: Ação/entrar.php');

endif;

