<?php 

namespace App\Model;

class Conexao {
    // variavel que vai receber todos os dados, e trabalhar estatisticamente
    private static $instance;

    public static function getConn() {

        if(!isset(self::$instance)) {
            // PDO é uma classe nativa da linguagem PHP, para ajudar a passar os dados do banco de dados
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        }
        
        return self::$instance;
    }
}