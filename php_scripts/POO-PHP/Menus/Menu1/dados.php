<?php
namespace dados;

class Dados {
    private $numero1, $numero2;

    public function __construct($num1, $num2)
    {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }
    public function getNum1()
    {
        return $this->numero1;
    }
    public function getNum2()
    {
        return $this->numero2;
    }
}

class Menu {
    private $soma, $mult, $maior; 

    // Ação com os valores de soma:
    public function setSoma(Dados $num)
    {
        $this->soma = $num->getNum1() + $num->getNum2();
    }
    public function getSoma() 
    {
        return $this->soma;
    }

    // Ação com os valores de mult:
    public function setMult(Dados $num)
    {
        $this->mult = $num->getNum1() * $num->getNum2();
    }
    public function getMult() 
    {
        return $this->mult;
    }

    // Ação com o maior valor:
    public function setMaior(Dados $num)
    {
        if($num->getNum1() > $num->getNum2()):
            $this->maior = $num->getNum1();

        else:
            $this->maior = $num->getNum2();

        endif;
    }
    public function getMaior()
    {
        return $this->maior;
    }
}
