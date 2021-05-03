<?php

class Pessoa {
    private $dados = array();

    // A $var significa por exemplo $nome, $idade (que vai se tornar um vetor de $dados[])... etc. e a var $valor siginifica que vai entrar um valor, o valor por exemplo 'Luiz' ou 18. A função __set faz isso
    public function __set($var, $valor) {
        $this->dados[$var] = $valor;
    }

    // a função get só retorna um valor que já passamos e está armazenada em $nome, $idade... etc.
    public function __get($var) {
        return $this->dados[$var];
    }

    // função usada para imprimir um objeto $pessoa
    public function __tostring() {
        return "Imprimindo um objeto";
    }
    // função usada para imprimir um objeto $pessoa como função
    public function __invoke() {
        return "Imprimindo um objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Luiz";
$pessoa->sexo = "Masc";
$pessoa->idade = 18;

echo $pessoa->nome."<br>";
echo $pessoa->sexo."<br>";
echo $pessoa->idade."<hr>";

// tostring
echo $pessoa."<hr>";

// invoke
echo $pessoa();
