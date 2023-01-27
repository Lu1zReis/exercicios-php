<?php
session_start();
include '../app/connect.php';
include '../app/pro.php';
include '../app/proDao.php';

// parte das mensagens da sessão
if($_SESSION['msg']) {
    echo $_SESSION['msg'];
}
session_unset();
session_destroy();


$produto = new \conn\Produto();
$produtoDao = new \conn\ProdutoDao();

if(isset($_POST['btn-editou'])):
    class Filtro {
        private $tit, $des, $c1, $c2, $uMusica, $musica;
        private $erros = array();

        public function __construct($t, $d, $c1, $c2, $uM, $m) {
            $this->tit = $t;
            $this->des = $d;
            $this->c1 = $c1;
            $this->c2 = $c2;
            $this->uMusica = $uM;
            $this->musica = $m;
        }

        public function verificaErros() {

            if(empty($this->tit)) {
                $this->erros[] = '<li>Preencha o campo título</li>';
            }
            if(empty($this->des)) {
                $this->erros[] = '<li>Preencha o campo descrição</li>';
            }
            if(empty($this->c1)) {
                $this->erros[] = '<li>Preencha o campo da primeira cor</li>';
            }
            if(empty($this->c2)) {
                $this->erros[] = '<li>Preencha o campo da segunda cor</li>';
            }
            if(empty($this->uMusica)) {
                $this->erros[] = '<li>Preencha o campo da última música</li>';
            }
            if(empty($this->musica)) {
                $this->erros[] = '<li>Preencha o campo música</li>';
            }

            if(!empty($this->erros)):
                foreach ($this->erros as $erro) {
                    echo $erro;
                }
            else:
                return true;
            endif;
        }
    }

    $filtro = new Filtro($_POST['titulo'], $_POST['descr'], $_POST['c1'], $_POST['c2'], $_POST['ultMusica'], $_POST['musica']);

    if($filtro->verificaErros()){
        $produto->setId(1);
        $produto->setTitulo($_POST['titulo']);
        $produto->setDescr($_POST['descr']);
        $produto->setCor1($_POST['c1']);
        $produto->setCor2($_POST['c2']);
        $produto->setUltMusica($_POST['ultMusica']);
        $produto->setMusica($_POST['musica']);
        
        if($produtoDao->Update($produto) == true):
            $_SESSION['msg'] = '<script>alert("Atualizado com sucesso");</script>';
            header('Location: ../index.php');
        else:
            $_SESSION['msg'] = '<script>alert("Erro ao atualizar");</script>';
            header('Location: ../index.php');
        endif;
    }
endif;

if(isset($_POST['cores'])):
    class Filtro2 {
        private $c1, $c2;
        private $erros = array();

        public function __construct($c1, $c2) {

            $this->c1 = $c1;
            $this->c2 = $c2;

        }

        public function verificaErros() {

            if(empty($this->c1)) {
                $this->erros[] = '<li>Preencha o campo da primeira cor</li>';
            }
            if(empty($this->c2)) {
                $this->erros[] = '<li>Preencha o campo da segunda cor</li>';
            }

            if(!empty($this->erros)):
                foreach ($this->erros as $erro) {
                    echo $erro;
                }
            else:
                return true;
            endif;
        }
    }

    $filtro = new Filtro2($_POST['c1'], $_POST['c2']);

    if($filtro->verificaErros()){
        $produto->setId(1);
        $produto->setCor1($_POST['c1']);
        $produto->setCor2($_POST['c2']);
        
        if($produtoDao->Cores($produto) == true):
            $_SESSION['msg'] = '<script>alert("Atualizado com sucesso");</script>';
        else:
            $_SESSION['msg'] = '<script>alert("Erro ao atualizar");</script>';
            header('Location: ../index.php');
        endif;
    }
endif;


foreach($produtoDao->Read() as $produto):

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Edição</title>
    <style>
            
        @import url(tiny.css) (min-width:300px);
        @import url(small.css) (min-width:600px);
        @import url(big.css) (min-width:900px);
        @media screen and (max-width: 1024px) {
            body {min-width: 1000px;}
        }
        @media screen and (min-width: 780px) {
            body {min-width: 480px;}
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            
        }

        body {
            font-size: 100%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background: linear-gradient(-19.15deg, <?php echo $produto['cor1']; ?> 16.62%, <?php echo $produto['cor2']; ?> 55.61%);
        }
        .cab {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-bottom: 0.2pt solid;
        }
        .form {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            font-style: italic;
            margin-top: 80px;
        }
        .form-linkVideo {
            display: flex;
            flex-direction: column;
            size: 50px;

        }
        .form-geral {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 6px;
        }
        .geral-item {
            height: 40px;
            width: 200px;
        }
        .botaoEnviar {
            padding-top: 30px;
            padding-bottom: 30%;
        }
    </style>
</head>
<body>
    <nav class="cab">
        <a href="../index.php">Página Inicial</a>
    </nav>
    <form class="form" action='<?php $_SERVER["PHP_SELF"]; ?>' method='POST'>
        <nav class="form-linkVideo">
            Link do video: <textarea name='musica' style="height: 100px;"><?php echo $produto['musica'] ?></textarea>
        </nav>
        <div id="geral" class="form-geral">
            Título: <input type="text" name='titulo' class="geral-item" value="<?php echo $produto['titulo'] ?>">

            Descrição: <textarea name='descr' style="height: 100px;"><?php echo $produto['descricao'] ?></textarea>

            Cor do fundo 1: <input type="color" name='c1' value="<?php echo $produto['cor1'] ?>">

            Cor do fundo 2: <input type="color" name='c2' value="<?php echo $produto['cor2'] ?>">

            <button type="submit" name="cores">Testar cores</button>

            Última música: <input type="text" name='ultMusica' class="geral-item" value="<?php echo $produto['UltMusica'] ?>"> 

            <div id="btn-enviou" class="botaoEnviar">
                <input type="submit" name='btn-editou'>
            </div>
        </div>
    </form>
</body>
</html>
<?php

endforeach;
