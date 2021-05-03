<?php
require_once 'ações/db_connect.php';
session_start();

// passando os textos do banco de dados
$sql = "";
class bancoDados {
    private $texto;

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

// passando as mensagens das sessões
if(isset($_SESSION['msg'])):
    echo $_SESSION['msg'];
endif;

// definindo se está logado ou não para editar a página
if(isset($_SESSION['logado'])):
    if($_SESSION['logado'] == true):
?>
<a href="ações/textos.php">Editar página</a><br>
<?php
    endif;
endif;
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="Português">
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168022540-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168022540-1');
</script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=700, initial-scale=1">
	<title>5ºEdificações</title>
	<link rel="shortcut icon" type="image/x-jpg" href="imagens/logo_edf.jpg" width='32px'>
</head>
<body>
    <font face='Arial'>
        <div id='inicio'>
            <form align="right" action="ações/logando.php"method="POST">
                <font color="white">Login</font>:<input type="text" name="login"><br>
                <font color="white">Senha</font>:<input type="password" name="senha"><br>
                <button type="submit" name="btn-login">Logar</button>
            </form>
            <center>
                <font size='5'>
                    <font color='white'>Site da Turma do Edificações 2019/1</font>
                </font>
            </center>
	    </div>

        <center>
            <img src='imagens/varzea_grande_instituto_federal_mato_grosso_rgb_horizontal_01.png' width='280px'>
        </center>

        <hr>

        <div id='central'>
            <form align='left'>
                <select name='isso' onchange='location = this.value;'>
                    <option selected value='Menu'>Menu</option>
                    <option value='menu/Matriz Curricular.php'>Matriz Curricular do Curso</option>
                    <option value='menu/e-mails.php'>E-mails dos professores</option>
                    <option value='menu/Sobre.php'>Sobre o Site</option>
                </select>
            </form>

    	   <p>O que é a definição do técnico em edificações pela própria <a href='https://www.wikipedia.org/' class = 'btn'>Wikipedia</a>: O Técnico em Edificações — como é chamado o profissional que conclui o curso — elabora projetos de Arquitetura e de Instalações Prediais tais como instalações elétricas, hidro-sanitárias, gás, e incêndio por meio da interpretação de normas técnicas e uso de softwares específicos</p>
        
    	   Bem, este site foi criado no intuito de ajudar a sala e os alunos, com os trabalhos e projetos.<br> A página é simples, mas tem muito a oferecer e crescer! e com atualizações sempre que possiveis.
    	   <br><br>

    	   <b>Sites que podem ser úteis:</b><br>


            <table border='4px' bordercolor='white' width='100%'>
            	<tr>
            		<td bgcolor='Red' height='40px'>
                        <b>
                            <center>
                                <a href='http://vgd.ifmt.edu.br/'>
                                    <font color='White' size='4'>Site IFMT-VGD</font>
                                </a>
                            </center>
                        </b>
                    </td>
            	<tr>
            		<td bgcolor='Lime' height='40px'>
                        <b>
                            <center>
                                <a href='http://moodle.ifmt.edu.br/vgd/login/index.php'>
                                    <font color='black' size='4'>Moodle</font>
                                </a>
                            </center>
                        </b>
                    </td>
            	<tr>
            		<td bgcolor='Blue' height='40px'>
                        <b>
                            <center>
                                <a href='https://academico.ifmt.edu.br/'>
                                    <font color='White' size='4'>Q-Acadêmico</font>
                                </a>
                            </center>
                        </b>
                    </td>
            	<tr>
            		<td bgcolor='Navy' height='40px'>
                        <b>
                            <center>
                                <a href='https://sites.google.com/prod/vgd.ifmt.edu.br/projetointegrador/'>
                                    <font color='White' size='4'>Site do Projeto Integrador</font>
                                </a>
                            </center>
                        </b>
                    </td>
            	<tr>
            	    <td bgcolor='Black' height='40px'>
                        <b>
                            <center>
                                <a href='https://suap.ifmt.edu.br/accounts/login/?next=/'>
                                    <font color='White' size='4'>SUAP</font>
                                </a>
                            </center>
                        </b>
                    </td>
            	<tr>
            </table>

            <br><br><hr>

    	   <font size='4'><b>Os tópicos são:</b></font>

    	   <ul>
                <b>
                <li><a href='#Capitulo1'>Trabalhos</a></li>
                <li><a href='#Capitulo2'>Projetos</a></li>
                <li><a href='#Capitulo3'>Encontros</a></li>
                <li><a href='#Capitulo4'>Provas</a>
                <li><a href='#Capitulo5'>Matérias do Semestre</a></li>
                <li><a href='#Capitulo6'>Notícias</a></li>
                </b>
            </ul>
    	   <hr><br>

            <p>
                <a name='Capitulo1'>
                    <font color='Red'>
                        <b>OS TRABALHOS SÃO:</b>
                    </font>
            </p>

            <p>
                <?php
                $id = 1;
                $banco_dados->Conexão($connect, $sql, $id);
                echo $banco_dados->getTexto();
                ?>
            </p>

    	   <p><a name='Capitulo2'><font color='Red'><b>TODOS PROJETOS (3 Semestre):</b></font></a>
                <ol>
                    <li>Roteiro de estudos 1</li>
                        <a href='https://drive.google.com/file/d/1Lj2fbHO2tpkOk67UJltKFxmr1_KLr3fk/view?usp=sharing'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 2</li>
                        <a href='https://drive.google.com/open?id=1bR8QC7miy6abywJq1oHxirD18puPfZM9'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 3</li>
                        <a href='https://drive.google.com/drive/folders/1TR4KdzfpV-IUvYaw2nqdInG0OBBay7mf'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 4</li>
                        <a href='https://drive.google.com/drive/folders/1-3NRP3SLwdbz3Ek79DQxZnJXq05P1Fj5'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 5</li>
                        <a href='https://drive.google.com/drive/folders/1UlZYFqcbqoT9jdRH6Gp6jJxArPubXemj?usp=sharing'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 6</li>
                        <a href='https://drive.google.com/drive/folders/1vrpifpzWRsJ3dBa5lSW6I8KsHds2Nh1d?usp=sharing'>Arquivo Para Baixar</a>
                    <li>Roteiro de estudos 7</li>
                        <a href='https://drive.google.com/drive/folders/1qxGH9vomURDauGDnfJ2dXmnR-yb7lpOc?usp=sharing'>Arquivo para baixar</a>
                </ol>
            </p>

            <p>
                    <a name='Capitulo2'><font color='Red'><b>TODOS PROJETOS (4 Semestre):</b></font></a>
                        <ol>
                            <li>R.E.D.</li>
                                <a href='https://drive.google.com/drive/folders/1-2Al5wvgbalLJ-ZdF_pEOQ_zilydUZ_o?usp=sharing'>Arquivo Para Baixar</a>
                            <li>R.E.D. II</li>
                                <a href='https://drive.google.com/drive/folders/1qHqJOaOSkWdUCWlQDJINmlmXDGs8jI7N'>Arquivo Para Baixar</a>
                            <li>R.E.D. III</li>
                                <a href='https://drive.google.com/file/d/1pvZfECPKAh8SEWWQSBh0_9xj2TEvkRgW/view?usp=sharing'>Arquivo Para Baixar</a>
                            <li>R.E.D. IV</li>
                                <a href='https://drive.google.com/drive/folders/10jUn36D2FWSngnLO2flQgU4aawvtPbnW?usp=sharing'>Arquivo Para Baixar</a>
                        </ol>
            </p>

            <p>
                <a name='Capitulo2'><font color='Red'><b>TODOS PROJETOS (5 Semestre):</b></font></a>
            </p>

                <?php
                $id = 2;
                $banco_dados->Conexão($connect, $sql, $id);
                echo $banco_dados->getTexto();
                ?>

    	    <p>
                <a name='Capitulo3'><font color='red'><b>WEB ENCONTROS:</b></font></a>
            </p>

            <?php
            $id = 3;
            $banco_dados->Conexão($connect, $sql, $id);
            echo $banco_dados->getTexto();
            ?>
           <br>

            <p>
                <a name='Capitulo4'><font color='Red'><b>DATAS DE PROVAS:</b></font></a>
            </p>

            <?php
            $id = 4;
            $banco_dados->Conexão($connect, $sql, $id);
            echo $banco_dados->getTexto();
            ?>
           <br>

            <p>
    	       <a name='Capitulo5'><font color='Red'><b>MATÉRIAS DO SEMESTRE:</b></font></a>
            </p>
            
            <?php
            $id = 5;
            $banco_dados->Conexão($connect, $sql, $id);
            echo $banco_dados->getTexto();
            ?>

    	   <br>

    	   <a name='Capitulo6'><font color='Red'><b>NOTÍCIAS:</b></font></a>
            <ul type='square'>
                <?php
                $id = 6;
                $banco_dados->Conexão($connect, $sql, $id);
                echo $banco_dados->getTexto();
                ?>
            </ul>
       </div>
   </font>
</body>
</html>
