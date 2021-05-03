<?php

namespace App\Model;

class Produto {
    // aonde os dados ficaram armazenados
    private $id, $nome, $descricao;


    // vamos passar esses dados algumas vezes no index.php em uma instância dessa classe Produto.
    // e depois que passarmos esses dados, alguma instância do ProdutoDao, irá pegar esses dados instânciados por parâmetro

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}
