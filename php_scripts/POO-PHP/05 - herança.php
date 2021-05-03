<?php
// podemos criar essa classe genérica para usar em seguida, como esse exemplo abaixo
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "andou...";
    }
    public function Parar() {
        echo "Parou...";
    }
}

// carro e moto herda os métodos e atributos da classe genérica 'Veiculo':
class Carro extends Veiculo { 
    public function VirarVolante() {
        echo "Virando em 321...";
    }
}
class Moto extends Veiculo {
    public function Acelerar() {
        echo "Acelerando em 321...";
    }
}

// aqui instanciamos as variaveis e depois podemos usar como já fizemos antes, sobre atributos e métodos em 'public' ou 'private':
$carro = new Carro();
$moto = new Moto();

$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2010;

$moto->modelo = "Biz";
$moto->cor = "Azul";
$moto->ano = 2015;

var_dump($carro);
var_dump($moto);

$carro->VirarVolante();
echo "<br>";
$carro->Parar();
echo "<hr>";
$moto->Acelerar();
echo "<br>";
$moto->Parar();
