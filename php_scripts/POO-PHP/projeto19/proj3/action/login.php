<?php

class Login {
    private $log, $pwd, $err = array();

    public function setVal($l, $p) {
        $this->log = $l;
        $this->pwd = $p;
    } 
    public function testVal() {
        if($this->log != 'admin') {
            $this->err[] = '<li>o login está incorreto</li>';
        }
        if($this->pwd != 'admin') {
            $this->err[] = '<li>a senha está incorreta</li>';
        }
        
        if(isset($this->err)) {
            foreach ($this->err as $erro) {
                echo $erro;
            }
        }
        if(empty($this->err)) {
            
            header('Location:  edit.php');
        }
    }
}

$prod = new Login();

if(isset($_POST['btn-entrar'])) {
    $l = $_POST['btn-login'];
    $s = $_POST['btn-pwd'];
    
    $prod->setVal($l, $s);

    $prod->testVal();
    
}


?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            Login: <input type="text" name="btn-login">
            <br>
            Senha: <input type="password" name="btn-pwd">
            <input type="submit" value="Entrar" name="btn-entrar">
        </form>
    </body>
</html>
