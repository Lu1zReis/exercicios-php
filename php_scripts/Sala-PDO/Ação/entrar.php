<?php
session_start();
require_once '../vendor/autoload.php';

// se já tiver logado ele pulará essa parte
if(isset($_SESSION['logado'])):
    header('Location: ../perfil.php');
endif;
// verificar se o usuário clicou em entrar na parte de login
if(isset($_POST['btn-entrar'])):

    $erros = array();

    // vamos verificar cada dado passado pelo usuário e verificar se está vazia ou não
    if(empty($_POST['btn-login']) or empty($_POST['btn-senha'])):
        if(empty($_POST['btn-login'])){
            $erros[] = "<li>Preencha o campo Login</li>";
        }

        if(empty($_POST['btn-senha'])){
            $erros[] = "<li>Preencha o campo Senha</li>";
        }

        // printando os erros
        foreach($erros as $erro):
            echo $erro;
        endforeach;

    else:
        // se estiver tudo certo, vamos para a verificação se existe os dados passados
        if(empty($erros)):

            $usuarioDao = new App\Model\UsuarioDao();

            // vamos passar os dados para outra variavel  
            $user = $_POST['btn-login'];
            // vamos criptografar a variável senha  
            $psw = base64_encode($_POST['btn-senha']);

            // a partir daqui vamos descobrir se os dados passados pelo usuário, consta no banco de dados, e vamos ver aqui se o retorno dos dados é > 0
            if(!empty($usuarioDao->Logar($user))):


                // foi usado o foreach aqui para pegar os dados como um array, pois eu não estava conseguindo acessar de outra forma
                foreach($usuarioDao->Logar($user) as $dados):

                    // aqui comparamos todos os dados do banco de dados nos campos nome e senha, e comparamos com que o usuário digitou
                    if($dados['nome'] == $user and $dados['senha'] == $psw):

                        // pegamos os dados do id e nome e adicionamos em uma sessão, para usarmos depois
                        $_SESSION['id'] = $dados['id'];
                        $_SESSION['nome'] = $dados['nome'];

                        $_SESSION['logado'] = true;
                        header('Location: ../perfil.php');

                    else:
                        echo "<li>Senha incorreta</li>";
                    endif;
                endforeach;

            else:
                echo "<li>Cadastro inexistente</li>";
            endif;

        endif;
    endif;



endif;

?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Entrar</title>
    <link rel="shortcut icon" type="image/x-jpg" href="../imagens/if_logo.png" width='25px'>
</head>
<body>

<div id="menu">
    <center>
        <table>

            <tr align="center">
                <td width="300px">
                    <a href="https://academico.ifmt.edu.br/">
                        <img src="../imagens/estudo_icone.jpg" width="60px" height="45px"><br>Q-Acadêmico
                    </a>
                </td> 
                <td width="400px">
                    <a href="entrar.php">
                        <img src="../imagens/user-icon-image-placeholder.jpg" width="60px" height="45px"><br>Perfil
                    </a>
                </td>
                <td width="300px">
                    <a href="../index.php">
                        <img src="../imagens/homeLaranja.png" width="60px" height="45px"><br>Home
                    </a>
                </td>
            </tr>

        </table>
    </center>
</div>

    <div id="Geral">
        <h2><font color="orange">Logar...</font></h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <table align="center" bgcolor="orange" cellpadding="8px">
                <tr>
                    <td><b>Login</b></td>
                    <td><input name="btn-login" type="text"></td>
                </tr>
                <tr>
                    <td><b>Senha</b></td>
                    <td><input name="btn-senha" type="password"></td>
                </tr>
                <tr>
                    <td><button name="btn-entrar" type="submit">Entrar</button></td>
                </tr>

            </table>
        </form>


        <center>
            <a href="cadastrar.php"><b>Não possuo cadastro<b></a>
        </center>
    </div>

</body>
</html>