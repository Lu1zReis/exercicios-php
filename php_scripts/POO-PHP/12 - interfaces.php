<?php

interface Crud
{
    // tudo que passarmos aqui precisamos passar em seguida na classe que implementarmos essa interface
    public function create($c);
    public function update($u);
    public function delete();
}

class Noticias implements Crud 
{
    public function create($c){
        // lógica da criação
    }
    public function update($u){
        // lógica de atualização
    }
    public function delete(){
        // lógica para deletar
    }
}
