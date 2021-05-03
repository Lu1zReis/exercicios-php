<?php

include 'dados.php';

if(isset($_POST['btn-enviar'])):
    $erros = array();
    if(empty($_POST['valor1']))
    {
        $erros[] = "<li>Preencha o primeiro valor</li>";
    }
    if(empty($_POST['valor2']))
    {
        $erros[] = "<li>Preencha o segundo valor</li>";
    }

    if(empty($_POST['menu']))
    {
        $erros[] = "<li>Escolha um campo do menu</li>";
    }
    
    foreach($erros as $erro)
    {
        echo $erro;
    }
    echo "<hr>";
    if(empty($erros)):

        // atribuindo valores vindo do formulário
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $soma = $mult = $maior = 0;

        $dados = new dados\Dados($valor1, $valor2);
        $menu = new dados\Menu();

        // mostrando soma
        if($_POST['menu'] == "soma"):
            $menu->setSoma($dados);
            echo "Soma: ".$menu->getSoma()."<hr>";
        

        // mostrando mult
        elseif($_POST['menu'] == "mult"):
        
            $menu->setMult($dados);
            echo "Multiplicação: ".$menu->getMult()."<hr>";


        // mostrando o maior:
        elseif($_POST['menu'] == "maior"):

            $menu->setMaior($dados);
            echo "Maior: ".$menu->getMaior()."<hr>";

        endif;
    endif;
endif;
?>

<html>
<head>
    <title>Menu 1</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Digite o primeiro valor: <input type="text" name="valor1"><br>
        Digite o segundo valor: <input type="text" name="valor2"><br>
        <hr>
        <b>Menu</b><br>
        -- O que deseja fazer? --<br>
        Somar: <input type="radio" name="menu" value="soma"><br>
        multiplicar: <input type="radio" name="menu" value="mult"><br>
        O maior: <input type="radio" name="menu" value="maior"><br>
        <button type="submit" name="btn-enviar">Enviar</button>
    </form>
</body>
</html>