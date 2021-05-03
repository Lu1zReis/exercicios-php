<?php

namespace App\Model;

class Usuario {
    // aqui definimos as variáveis para usarmos depois  
    private $id, $login, $senha, $email;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        return $this->id = $id;
    }

    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        return $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($senha) {

        return $this->senha = base64_encode($senha);
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            return $this->email = $email;
        else:
            return false;
        endif;

    }
}