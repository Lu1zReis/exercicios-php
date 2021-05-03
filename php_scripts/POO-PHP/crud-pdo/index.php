<?php
// vendor/autoload armazena todas as classes/arquivos, para não precisarmos ficar passando sempre
 require_once 'vendor/autoload.php';

 // Aqui vai receber todos os tipos de dados para printar, retornar ou só colocar para passar depois
 $produto = new \App\Model\Produto();

 // precisamos setar o id quando quisermos fazer o update
 $produto->setId(6);

 // esses valores pré postos são um exemplo, mas podemos fazer um formulário, que recebe como parâmetro $_POST. Basicamente a classe Produto vai receber valores que ficaram armazenados na execução, para serem usadas depois na classe ProdutoDao e serem enviadas ao banco de dados
 $produto->setNome('MODEM');
 $produto->setDescricao('Fibra óptica');

// aqui vamos criar essa instância para acessar as funções básicas do CRUD
 $produtoDao = new \App\Model\ProdutoDao();

/*
O método create é passada como padrão um parâmetro produto, precisamos antes setar valores, nessa instância produto, que ficaram armazenadas nessas funções, até chamarmos elas e adicioná-las nas funções que jogaram no banco de dados 
$produtoDao->Create($produto);

Essa função Update, é que vai precisar do id quando setarmos ela antes na classe $produto, pois, com ela vamos conseguir saber qual linha iremos querer atualizar

$produtoDao->Update($produto);

A baixo podemos ver uma função do Crud, o delete, que está recebendo como parâmetro um valor, que não é uma instância, diferente da Update e Create:
 $produtoDao->Delete(6);
*/

// Aqui vamos printar todos os valores da tabela do banco de dados
 foreach($produtoDao->Read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
 endforeach;

 ?>
