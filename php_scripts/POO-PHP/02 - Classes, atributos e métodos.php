<?php
class Pessoa{
	// atributos
	public $nome;
	public $idade;

	// métodos
	public function Falar(){
		// o '$this->' é usado para exibir os valores dentro do método
		// e quando chamado a função Falar, será pego os dados do objeto especifico que for passado;
		echo $this->nome." de ".$this->idade." falou ";
	}

}

// instânciando / tranformando em objeto;
$Luiz = new Pessoa();
$Fael = new Pessoa();

// atribuindo valores aos atributos 'nome' e 'idade' da classe 'Pessoa' pelos objetos Fael e Luiz;
$Fael->nome = "Rafael Vinicius";
$Fael->idade = 18;
$Luiz->nome = "Luiz Eduardo";
$Luiz->idade = 20;

// printando os valores;
echo "Nome: ".$Fael->nome;
echo "<br>";
echo "Idade: ".$Fael->idade;
echo "<br>";
$Fael->Falar();

echo "<hr>";

echo "Nome: ".$Luiz->nome;
echo "<br>";
echo "Idade: ".$Luiz->idade;
echo "<br>";
$Luiz->Falar();

