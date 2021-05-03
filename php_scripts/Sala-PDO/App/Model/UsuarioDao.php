<?php

namespace App\Model;

class UsuarioDao {

    // essa função vai criar no banco de dados novos cadastros
    public function Create(Usuario $u) {

        $sql = 'INSERT INTO usuarios (nome, senha, email) VALUES (?,?,?)';

        $stmt = Connect::getConn()->prepare($sql);

        $stmt->bindValue(1, $u->getLogin());
        $stmt->bindValue(2, $u->getSenha());
        $stmt->bindValue(3, $u->getEmail());

        $stmt->execute();

    }

    public function Read() {

        $sql = 'SELECT * FROM usuarios';

        $stmt = Connect::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resu = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resu;
        else:
            return [];
        endif;

    }

    public function Update(Usuario $u) {

        $sql = 'UPDATE usuarios SET nome = ?, senha = ?, email = ? WHERE id = ?';

        $stmt = Connect::getConn()->prepare($sql);

        $stmt->bindValue(1, $u->getLogin());
        $stmt->bindValue(2, $u->getSenha());
        $stmt->bindValue(3, $u->getEmail());
        $stmt->bindValue(4, $u->getId());

        $stmt->execute();

    }

    public function Delete(Usuario $u) {

        $sql = 'DELETE FROM usuarios WHERE id = ?';

        $stmt = Connect::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getId());

        $stmt->execute();

    }

    // Função que vai logar o usuário, recebendo por parâmetro o nome, vindo do campo login (poderíamos passar também a $senha se quissesemos)
    public function Logar($nome) {

        $sql = 'SELECT * FROM usuarios WHERE nome = ?';
        
        $stmt = Connect::getConn()->prepare($sql);
        $stmt->bindValue(1, $nome);
        
        $stmt->execute();

        // Vai verificar se existe algum valor passado com a função rowCount()
        if($stmt->rowCount() > 0):

            // aqui vamos transformar tudo em um array() e depois retornar ele
            $resu = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resu;
        else:
            // se rowCount retornar falso, ele irá retornar um array vazio
            return [];
        endif;


    }

    public function setTextos($texto, $id) {

        $sql = 'UPDATE texto SET dados = ? WHERE id = ?';

        $stmt = Connect::getConn()->prepare($sql);
        $stmt->bindValue(1, $texto);
        $stmt->bindValue(2, $id);

        $stmt->execute();
    }

    // aqui basicamente passamos o id no perfil.php manualmente em cada tabela que queremos
    public function getTextos($id) {

        $sql = 'SELECT * FROM texto WHERE id = ?';

        $stmt = Connect::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        // usamos a mesma estrutura como antes    
        if($stmt->rowCount() > 0):
            $resu = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resu;
        else:
            return [];
        endif;
    }
}