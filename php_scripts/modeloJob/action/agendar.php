<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
</head>
<body>
    <h1 class="titulo">Agendar</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome">
        CPF: <input type="text" name="cpf">
        <button type="submit" name="btn">Enviar Dados</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])) {
    // criando uma classe para verificar se virá algum campo vazio e se está valido
    class Filtro {
        private $nome;
        private $cpf;
        private $erros = array();
        // pegando dados do form
        public function __construct($n, $c) {
            $this->nome = $n;
            $this->cpf = $c;
        }

        public function verificandoCampoVazio() {
            if(empty($this->nome)):
                $this->erros[] = "<li>Preencha o campo nome</li>";
            endif;
            if(empty($this->cpf)):
                $this->erros[] = "<li>Preencha o campo CPF</li>";
            endif;
            
            // passando os erros ou retornando verdadeiro
            if(!empty($this->erros)):
                foreach ($this->erros as $erro):
                    echo $erro;
                endforeach;
            else:
                return true;
            endif;
        }

    }

    $usuario = new Filtro($_POST["nome"], $_POST["cpf"]);

    if($usuario->verificandoCampoVazio()):
        echo "<li>tudo okay</li>";
        echo $_POST['nome'];
        echo $_POST['cpf'];
    endif;
}
?>