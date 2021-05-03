<html>

<head>
    <title>Upload Multiplo</title>
</head>

<body>

    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
        <input type='file' name='arquivo[]' multiple><br> 
        <input type='submit' name='enviar-formulário'>
    </form>

    <?php
        if(isset($_POST['enviar-formulário'])):
           // var_dump($_FILES); // ver os dados passados

           $formatosPermitidos = array("png", "jpeg", "jpg");
           $quantidadeArquivos = count($_FILES['arquivo']['name']);
           $contador = 0;

            while($contador < $quantidadeArquivos):
            
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                if(in_array($extensao, $formatosPermitidos)):
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        echo "Upload feito com sucesso para a pasta $pasta.$novoNome <br>";
                    else:
                        echo "Erro, não foi possível fazer o upload $temporario <br>";
                    endif;
                else:
                    echo "Formato inválido: $extensao <br>";
                endif;
            $contador++;
            endwhile;

        endif;
    ?>

</body>

</html>