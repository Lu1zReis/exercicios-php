<?php
class jogo{
    protected $layout; // esse modificador é restrito, porém pode ser acessado mesmo assim por classes que o extende;
}
class Minecraft extends jogo{
    private $estilo = "quadrado"; // esse modificador é usado somemente e só por essa classe, e não pode ser acessada fora dela;

    // o public é o menos restrito dos 3, podendo ser acessado em qualquer lugar do código;
    public function GetEstilo(){
        return $this->estilo;
    }
    public function GetLayout(){
        return $this->layout;
    }
    public function SetLayout($m){
        $this->layout = $m;
    } 
}

$mine = new Minecraft();
$mine->SetLayout("blocos");

var_dump($mine);
