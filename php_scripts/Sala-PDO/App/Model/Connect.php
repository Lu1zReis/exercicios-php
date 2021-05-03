<?php

namespace App\Model;

// fazer a conexão com o banco de dados
class Connect {
    
    private static $instance;

    public static function getConn() {

        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=sala;charset=utf8', 'root', '');
        }

        return self::$instance;
    }
}