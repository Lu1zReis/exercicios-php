<?php

class login {
	private $nome;
	private $email;
	private $senha;

	// a função construct é usada para passarmos direto os dados, quando instânciamos um novo objeto fora da classe.
	public function __construct($nome, $email, $senha) {
		$this->nome = $nome;
		$this->set_email($email);
		$this->set_senha($senha);
	}
	public function get_nome() {
		return $this->nome;
	}
	public function get_email() {
		return $this->email;
	}
	public function set_email($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}
	public function get_senha() {
		return $this->senha;
	}
	public function set_senha($s) {
		$this->senha = $s;
	}
}

$usuario = new login("Luiz Eduardo", "eluiz8204@gmail.com", "12346");
echo $usuario->get_nome()."<br>";
echo $usuario->get_email()."<br>";
echo $usuario->get_senha();
