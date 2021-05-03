<?php
session_start();

require_once 'vendor/autoload.php';

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}

unset($_SESSION['msg']);

$usuarioDao = new App\Model\UsuarioDao();

?>

<html lang="Português">
<head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>5º Edificações</title>
    <link rel="shortcut icon" type="image/x-jpg" href="imagens/if_logo.png" width='25px'>
<head>
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
                <td width="300px">
                    <a href="index.php">
                        <img src="imagens/homeLaranja.png" width="60px" height="45px"><br>Home
                    </a>
                </td>
                <td width="400px">
                    <a href="Ação/entrar.php">
                        <img src="imagens/user-icon-image-placeholder.jpg" width="60px" height="45px"><br>Perfil
                    </a>
                </td>
            </tr>

        </table>
    </center>
</div>

<div id="Geral">

    <img src="imagens/logo-ifmt.png">

    <div id="Temas">
        <b>Home</b>/Sites
    </div>

    <table border='4px' bordercolor='white' width='100%'>
        <tr>
            <td bgcolor='Orange' height='40px'>
                <b>
                    <center>
                        <a href='http://vgd.ifmt.edu.br/'>
                            <font color='black' size='4'>Site IFMT-VGD</font>
                        </a>
                    </center>
                </b>
            </td>
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
    </table>

    <br><br><br><br>

    <div id="Temas">
        <b>Home/</b>
        <a href="#trabalho">Trabalhos</a> - 
        <a href="#red">RED</a> - 
        <a href="#webEncontro">Web encontros</a> - 
        <a href="#Materias">Matérias do Semestre</a>
    </div>

    <br><br>
    <a name="trabalho"><h3>Trabalhos</h3></a>

    <?php

    foreach($usuarioDao->getTextos(1) as $texto) {
        echo $texto['dados'];
    }

    ?>

    <br><hr>
    <a name="red"><h3>RED (pdf's)</h3></a>

    <?php

    foreach($usuarioDao->getTextos(2) as $texto) {
        echo $texto['dados'];
    }

    ?>

    <br><hr>
    <a name="webEncontro"><h3>Web Encontros Marcados</h3></a>

    <?php

    foreach($usuarioDao->getTextos(3) as $texto) {
        echo $texto['dados'];
    }

    ?>

    <br><hr>
    <a name="Materias"><h3>Matérias do Semestre</h3></a>
    <center>
        <?php

        foreach($usuarioDao->getTextos(4) as $texto) {
            echo $texto['dados'];
        }

        ?>
    </center>

    <br><br><br><br>

    <hr>

    <br><br>
    
    <center>
        Projetado por: Luiz Eduardo
    </center>

</div>

</body>
</html>