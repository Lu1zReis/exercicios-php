<?php

class Login {
    // o atributo e o método abaixo são estáticos, e é usado o static em seguida do acesso (no caso public)
    public static $user;
    public static function verificaLogin() {
        // o $this não pode ser usado quando um atributo ou método é estático
        echo "O usuário ".self::$user." está logado";
    }

    public function Deslogar() {
        echo "Deslogado";
    }
}

// quando um método ou atributo é estático não precisamos instânciar uma classe
Login::$user = "admin";
Login::verificaLogin();

echo "<br>";
// aqui podemos ver que ainda podemos instânciar a classe, mesmo com algumas opções no static.
$login = new Login();
$login->Deslogar();