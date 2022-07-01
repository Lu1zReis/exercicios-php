<?php
session_start();
include '../app/connect.php';
include '../app/pro.php';
include '../app/proDao.php';

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

foreach($produtoDao->Read() as $produto):

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edição</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='edit.css'>
</head>
<body>
    <nav class="cab">
        <a href="../index.html">Página Inicial</a>
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
