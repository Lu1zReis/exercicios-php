<?php
// incluindo os arquivos iguais
include 'classes/class.php';
include 'models/model.php';

// podemos usar assim para uma maneira de printar o valor

/*
$produto = new \model\Produto();
$produto->mostrarDetalhes();
*/

// outra maneira de usar também

/*
use model\Produto;
$produto = new Produto();
*/

// e também
use Model\Produto as Product;
use classe\Produto as Models;

$produto1 = new Product();
$produto2 = new Models();

echo $produto1->mostrarDetalhes()."<br>";
echo $produto2->mostrarDetalhes();