<?php
// precisamos passar o namespace class, para assim quando chamarmos depois a class produto, sabermos que tem uma classe parecida com ela em atributos e métodos em outro arquivo
namespace Classe;

class Produto 
{
    public function mostrarDetalhes() {
        echo "Exibindo detalhes dentro da pasta classes";
    }
}
