<?php
// Testes com 'function(s)'

class Veiculo {
    protected $marca;
    protected $cor;

    // para usarmos uma função como privado ou protected, é simples, só bastamos criar uma outra função pública que vai ajudar a executá-la;
    protected function Andar() { 
        echo "andou";
    }
}
class Carro extends Veiculo {
    public function SetMarca($m) {
        $this->marca = $m;
    }
    public function GetMarca() {
        return $this->marca;
    }
    public function SetCor($c) {
        $this->cor = $c;
    }
    public function GetCor() {
        return $this->cor;
    }

    public function AcaoAndar() {
        $this->Andar();
    }
}

$car = new Carro();
$car->AcaoAndar();
var_dump($car);
