<?php

namespace App\Model;

class ProdutoDao {

    // a função Create está passando por parâmetro uma instância $p, que no index.php vamos passar depois os dados prontos
    public function Create(Produto $p) {

        // podemos passar os valores no VALUES como (?,?) e depois colocar em sequência a numeração para inserir no banco de dados 
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        // $stmt está pegando a classe Conexao, e o método getConn() e usando uma função prepare(), passando como parâmetro o banco de dados, que é uma maneira rápida e segura de se trabalhar
        $stmt = Conexao::getConn()->prepare($sql);

        // $p que está vindo como uma instância, para depois podermos acessar os dados que quisermos da classe Produto, basicamente só retornando o valor
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        // depois usamos o execute() para fazer a query com o banco de dados  
        $stmt->execute();
    }

    // a funcão Read vai ler todos os dados do banco de dados e depois repassá-los com a lógica usada abaixo
    public function Read() {

        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        // RowCount é uma função do PDO, que retorna a quantidade de valores no banco de dados
        if($stmt->rowCount() > 0):
            // FetchAll é uma função que é retornado em forma de Array(). Isso vai ser retornado, caso haja valores no banco de dados
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            // Caso não haja, irá retornar um array vazio
            return [];
        endif;


    }

    // Essa função irá atualizar uma linha específica no banco de dados
    public function Update(Produto $p) {
    
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);

        // aonde vai retornar os valores e atualizá-los
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();

    }

    // A função que irá deletar os dados específicos de uma linha no banco de dados, passando como parâmetro um $id para específicar. Podemos também passar uma instância, como em Create e Update, para chamarmos $produtoDao->Delete($produto->getId($id));
    public function Delete($id) {

        // Vamos deletar dessa forma a linha que queremos
        $sql = 'DELETE FROM produtos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

}