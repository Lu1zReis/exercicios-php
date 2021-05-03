<?php
 
class login{
	// não podemos acessar diretamente quando o atributo é 'private'.
	// porém, para acessar, basta criar um método 'public', que vai ajudar-nos a printar e adicionar novos valores no atributo. 
	private $email;
	private $senha;

// email ----------------
	// o get é usado para dar print na tela, ele retorna os dados contido na váriavel private email.
	public function get_email(){
		return $this->email;
	}
	// o set é usado para adicionar os valores pelo parâmetro, já que não podemos adicionar diretamente pois ela está privada.
	public function set_email($e){
		// um exemplo:
		// vamos filtrar primeiro os dados vindo por parâmetro, depois jogamos os dados filtrados no atributo 'email' da classe 'login'.
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

// senha -----------------
	public function get_senha(){
		return $this->senha;
	}
	public function set_senha($s){
		$this->senha = $s;
	}

	public function logar(){
		if($this->email == "eluiz8204@gmail.com" and $this->senha == "123456"):
			echo "Logado com sucesso";
		else:
			echo "Login inválido";
		endif;
	}
}

$usuario = new login();

// usar e manusear os dados dessa maneira (através de set's e get's) é importante, pois podemos filtrar e etc. tudo pelo método dentro da classe.

// atribuindo valores:
$usuario->set_email("eluiz8204()/\@gmail.com");
$usuario->set_senha("123456");

// printando valores:
echo $usuario->get_email()."<br>";
echo $usuario->get_senha()."<br>";

$usuario->logar();
