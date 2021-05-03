<?php
// precisamos passar o namespace model, para assim quando chamarmos depois a class produto, sabermos que tem uma classe parecida com ela em atributos e métodos em outro arquivo
namespace Model;

class Produto 
{
    public function mostrarDetalhes() {
        echo "Exibindo detalhes dentro da pasta models";
    }
}
