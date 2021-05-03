<?php
// sessão
session_start();

// conexão
require_once 'db_connect.php';

// Botão enviar
if(isset($_POST['enviar'])):
    $erros = array();

    // Vamos filtrar atraves do MySqli
    $login = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    // Verificar se os campos vieram vazios
    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        // agora vamos verificar se existe no banco de dados:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        // aqui vai verificar se a variavel $resultado tem algo e é maior do que zero, e se tiver está certo
        if(mysqli_num_rows($resultado) > 0):

            // para encriptografar e conseguirmos acessarmos, já que no banco de dados a senha está em md5
            $senha = md5($senha);

            // vamos verificar agora todos os campos passados pelo usuário no banco de dados
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            // passamos dessa vez == 1 porque estamos verificando um dado de uma só vez
            if(mysqli_num_rows($resultado) == 1):

                // essa função usada do myqli abaixo é para transformarmos os dados de $resultado em um array para usarmos depois
                $dados = mysqli_fetch_array($resultado);

                mysqli_close($connect); // fechando a conexão com o banco de dados



                $_SESSION['logado'] = true; // usamos isso depois para testar se o usuário se logou, e se ele tentar acessar pelo link, não irá funcionar.

                $_SESSION['id_usuario'] = $dados['id'];
                header("Location: home.php");

            else:
                $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;        

        else:
            $erros[] = "<li>Usuário inexistente</li>";
        endif;

    endif;

endif;
?>

<html>
    <head>
        <title>sistema de login</title>
    </head>
    <body bgcolor="gray">

        <center>

            <h1>Login</h1>

            <?php
            // esse bloco php é para exibir os erros
            if(!empty($erros)):
                foreach ($erros as $erro) {
                    echo $erro;
                }
            endif;

            ?>

            <hr>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <b>Login:</b> <input type="text" name="usuario"><br>
                <b>Senha:</b><input type="password" name="senha"><br>
                <button type="submit" name="enviar">Entrar</button>
            </form>

        </center>
    </body>
</html>
