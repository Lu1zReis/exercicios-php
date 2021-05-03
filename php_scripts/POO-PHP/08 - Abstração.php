<?php
// aqui definimos essa classe como abstrata, isso quer dizer que ela vai servir como modelo
abstract class Banco {
    protected $dinheiro;

    public function GetDinheiro() {
        return $this->dinheiro;
    }
    public function SetDinheiro($m) {
        $this->dinheiro = $m;
    }

    // quando falamos que essas próximas funções são abstratas, precisamos depois passar nas próximas classes que a extenderem essas funções pois elas precisam seguir o modelo
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Nubank extends Banco {
    // precisamos definir essas funções se não, o programa não ia funcionar
    public function Sacar($s) {
        $this->dinheiro -= $s;
    }
    public function Depositar($d) {
        $this->dinheiro += $d;
    }
}

$nubank = new Nubank();
$nubank->SetDinheiro(100);
echo $nubank->GetDinheiro()."<hr>";
$nubank->Depositar(50);
echo $nubank->GetDinheiro()."<hr>";
$nubank->Sacar(50);
echo $nubank->GetDinheiro()."<hr>";
