<?php
// 'self::' exibi o valor dentro daquela classe específica.
// 'parent::' exibi o valor fora da classe - aquela que há está a extendendo (no caso Pessoa).

class Pessoa {
    const nome = "Luiz";
}

class Luiz extends Pessoa {
    const nome = "Eduardo";
    
    public function getNome() {
        // irá exibir "Luiz"
        echo parent::nome;
    }
}

$luiz = new Luiz();
$luiz->getNome();
