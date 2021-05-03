<?php

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereço;
}

$cliente = new Cliente();
$cliente->nome = "Luiz";
$cliente->endereço = "Casa xx, rua --";

$pedido = new Pedido();
$pedido->numero = 123;
$pedido->cliente = $cliente; // = ['$nome', '$endereço'];

$dados = array(
    // aqui estamos atribuindo esses valores em um array de dados
    'numero_pedido' => $pedido->numero,

    // aqui abaixo o $pedido aponta para o atributo cliente de sua classe, que antes havia recebido todos os dados do objeto cliente;
    'nome_cliente' => $pedido->cliente->nome,
    'endereço_cliente' => $pedido->cliente->endereço
);

var_dump($dados);
?>
