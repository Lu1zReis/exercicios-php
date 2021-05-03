<?php
# fazendo uma sessão
session_start();
# ligando com o arquivo que tem o banco de dados
require_once "connect.php";

if(isset($_POST['btn-enviar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if(empty($login) or empty($senha)):
        $erros[] = "<li>Campo login ou senha precisam ser preenchidos</li>";
    else:
        $sql = "SELECT login FROM usuario WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sqlTodosCampos = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sqlTodosCampos);
            if(mysqli_num_rows($resultado) == 1):
                // $dados = mysqli_fetch_array($resultado); // transformar em um array de dados do banco de dados
                mysqli_close($connect);
                // $_SESSION['id_usuario'] = $dados['id']; usar se eu quiser para passar meus dados na outra página
                $_SESSION['logado'] = true;
                header("Location: home.php");
            else:
                $erros[] = "<li>Usuário ou senha não conferem</li>";
            endif;
        else:
            $erros[] = "<li>Usuário inexistente</li>";
        endif;
    endif;
endif;
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estiloIndex.css">
        <title>Login</title>
    </head>
    <body>
        <?php
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
        <div id="login">
        <font color="black" size="4px">
            <table border='4px' bordercolor='black'>
                <tr>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <td>
                        <b>Login:</b><input type="text" name="login"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Senha:</b><input type="password" name="senha"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="btn-enviar">Entrar</button>
                    </td>
                    </form>
                </tr>
            </table>
        </font>
        </div>
    </body>
</html