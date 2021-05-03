<?php
# classe que armazena os produtos
class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    # Quando colocamos o 'Produtos' ali em seguida do '$produto' significa que essa função vai receber dados de objetos instânciados pela classe 'Produtos'

    public function Adiciona(Produtos $produto) {
        # aqui abaixo declaramos que $produtos vai receber um array de dados (no caso produto1 e produto2) 
        $this->produtos[] = $produto;
    }
    public function Exibir() {

        foreach ($this->produtos as $produto) {
            # $produto agora pode acessar os dados, pois antes pegamos um objeto instânciado e atribuimos a ele 
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}
# passando os valores
$produto1 = new Produtos("Notebook", 1500);
$produto2 = new Produtos("Playstation 4", 2500);

$carrinho = New Carrinho();

# adicionando os valores instânciados
$carrinho->Adiciona($produto1);
$carrinho->Adiciona($produto2);

#exibindo os valores
$carrinho->Exibir();
