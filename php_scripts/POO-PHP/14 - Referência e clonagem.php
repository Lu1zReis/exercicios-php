<?php

class Pessoa 
{
    public $idade;

    public function __clone() {
        echo "Esse objeto foi clonado: ";
    }

}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// fazendo referência
$pessoa2 = $pessoa;
$pessoa2->idade = 35; // esse valor vai ser atribuido a $pessoa, como um ponteiro

// clonando a classe
$pessoa3 = clone $pessoa;
$pessoa3->idade = 45; // esse valor não vai interfirir na instância $pessoa

echo $pessoa->idade."<br>";
echo $pessoa3->idade;