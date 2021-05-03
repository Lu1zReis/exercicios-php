<?php

class Animal {
    public function Andar() {
        echo "andou";
    }
}

class Gato extends Animal {

    // polimorfismo é basicamente substituir o primeiro valor, no caso a função andar() da classe Animal
    // assim dar um novo valor a função andar()
    /*
    public function Andar() {
        echo "o gato andou";
    }
    */
}

$gato = new Gato();
$gato->Andar();
