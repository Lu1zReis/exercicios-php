<?php
namespace conn;

class ProdutoDao {
    public function Read() {
        $sql = 'SELECT * FROM dados';

        $stmt = Conexão::getConn()->prepare($sql);
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
    public function Update(Produto $p) {
        $sql = 'UPDATE dados SET titulo = ?, descricao = ?, cor1 = ?, cor2 = ?, UltMusica = ?, musica = ? WHERE id = ?';

        $stmt = Conexão::getConn()->prepare($sql);

        // aonde vai retornar os valores e atualizá-los
        $stmt->bindValue(1, $p->getTitulo());
        $stmt->bindValue(2, $p->getDescr());
        $stmt->bindValue(3, $p->getCor1());
        $stmt->bindValue(4, $p->getCor2());
        $stmt->bindValue(5, $p->getUltMusica());
        $stmt->bindValue(6, $p->getMusica());
        $stmt->bindValue(7, $p->getId());

        if($stmt->execute()):
            return true;
        else:
            return false;
        endif;

    }

    public function Cores(Produto $p) {
        $sql = 'UPDATE dados SET cor1 = ?, cor2 = ? WHERE id = ?';

        $stmt = Conexão::getConn()->prepare($sql);

        // aonde vai retornar os valores e atualizá-los

        $stmt->bindValue(1, $p->getCor1());
        $stmt->bindValue(2, $p->getCor2());
        $stmt->bindValue(3, $p->getId());

        if($stmt->execute()):
            return true;
        else:
            return false;
        endif;

    }
}
