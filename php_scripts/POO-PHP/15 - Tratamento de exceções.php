<?php

class NewsLetter 
{
    public function cadastroEmail($email) {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("cadastro inválido de e-mail");
        else:
            echo "Email cadastrado com sucesso";
        endif;

    }
}

$newsLetter = new NewsLetter();

// aqui vai fazer um teste primeiro em 'try'
try {
    $newsLetter->cadastroEmail("email@");
}

// se não funcionar vai para a condição 'catch'
// a var $e vai pegar todos os dados da Exception
catch(Exception $e) {
    // podemos exibir as mensagem com as seguintes palavras:
    /*
    Message, Code, File e Line
    */
    echo "Messagem: ".$e->getMessage()."<br>";
}