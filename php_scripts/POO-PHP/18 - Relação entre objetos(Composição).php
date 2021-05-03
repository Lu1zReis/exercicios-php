<?php
// Composição
// Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída a outra classe também será.

class Pessoa {
    public function AtribuiNome($nome) {
        return "O nome da pessoa é ".$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    // função para instânciar e atribuir o nome
    function __construct($nome) {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    // função que acessará a outra função (AtribuiNome), da classe Pessoa
    public function ExibeNome() {
        echo $this->pessoa->AtribuiNome($this->nome);
    }
}

$exibe = new Exibe("Luiz");
$exibe->ExibeNome();
