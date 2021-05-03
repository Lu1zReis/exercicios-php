<?php
session_start();

if(!isset($_SESSION['logado'])):
    header("Location: index.php");
endif;
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Meu Site</title>
        <meta charset="utf-8"> <!--Isso serve para manter o site mais seguro-->
    </head>
    <body bgcolor="lavender" link="red" vlink="" alink="red">
        <font face="Arial"> <!--Mudar a fonte de texto para arial, como padrão-->

            <div id="introducão">
                <!--Aqui usei uma base de formulario para ajudar a colocar o texto do lado da foto-->
                <table>
                    <tr>
                        <td><img src="imagens/shouta.jpg" width="230px" height="270px"></td>
                        <td>
                            <p align="right">
                                <a href="logout.php"><b>Encerrar sessão</b></a><br>
                            </p>
                            <u>
                                <font color="white">
                                    Olá, meu nome é Luiz Eduardo Reis Martins, isso aqui é como se fosse uma base de um formulario sobre mim.
                                </font>
                            </u>
                            <p>
                            Bom, eu diria que sou um amante de tecnologia, com foco em desenvolvimento <i>web</i>, voltado para a parte 
                            do <i>backend.</i>Eu posso ser um garoto, mas sou uma pessoa engajada e comunicativa, que espera poder estudar 
                            muito ainda, mas que possa também ganhar experiência trabalhando e colocando na prática tudo que aprende.
                            </p>
                            <b>Mais a baixo você pode encontrar informações como:</b>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="escolhas">
                <center>
                    <b>
                        --------------------------------------
                        <a href="#escolha1"><font color="white">Sobre mim</font></a>
                        -----------------
                        <a href="#escolha2"><font color="white">Vida acadêmica</font></a>
                        -----------------
                        <a href="#escolha3"><font color="white">Linguagens</font></a>
                        -----------------
                        <a href="#escolha4"><font color="white">Projetos</font></a>
                        -----------------
                        <a href="#escolha5"><font color="white">Experiências</font></a>
                        --------------------------------------
                    </b>
                </center>
            </div>

            <div id="geral">
                <p>
                    <!--Aqui chega a parte sobre mim-->
                    <a name="escolha1">
                        <font color="green" size="5"><b>Sobre mim</b></font>
                    </a>
                </p>
                    <!--Aqui é minhas caracteristicas e eu resolvi usar dois <ul> para ficar melhor para ver-->
                <ul>

                    <li>
                        <b>Nacionalidade</b>
                    </li>
                        <ul type="circle">
                            <li>Brasil</li>
                        </ul>
                        
                    <li>
                        <b>Linguas</b>
                    </li>
                        <ul type="circle">
                            <li>Português(Brasil) - Fluente</li>
                            <li>Inglês(EUA) - Intermediário</li>
                        </ul>

                    <li>
                        <b>Idade</b>
                    </li>
                        <ul type="circle">
                            <li>17 anos</li>
                        </ul>
                </ul>

<!--Aqui começa outra parte, que será sobre minha vida acadêmica-->
                <p>
                    <a name="escolha2">
                        <font color="green" size="5"><b>Vida acadêmica</b></font>
                    </a>
                </p>
                <ul>
                    <li>
                        <b>Centro acadêmico de estudos</b>
                    </li>

                    <ul type="circle">
                        <li>IFMT - Instituto Federal do Mato Grosso(cursando)</li>
                    </ul>
                    
                    <li>
                        <b>Cursos</b>
                    </li>

                    <ul type="circle">
                        <li>HTML - básico (Fundação Bradesco)</li>
                        <li>HTML - Avançado (Fundação Bradesco)</li>
                        <li>CSS - Básico (Fundação Bradesco</li>
                        <li>T.I. - assuntos gerais (Senai)</li>
                        <li>Informática - Básica (Senai)</li>
                        <li>Assistente Administrativo (Senai)</li>
                    </ul>
                </ul>

                <p>
                    <a name="escolha3">
                        <font color="green" size="5"><b>Linguagens de Programação/Codificação</b></font>
                    </a>
                </p>

                <table>
                    <tr>
                        <td>
                            <img src="imagens/c-plus-plus-logo.png" width="100px" height="95px">
                        </td>
                        <td>
                            <font size="4" style="font-family:Calibri">
                                <b>C++</b> - Intermediário. 1 ano de experiência, maioria dos projetos feitos por aqui.
                            </font>
                        </td>
                    </tr>
                    <!--Python-->
                    <tr>
                        <td>
                            <img src="imagens/600px-Python-logo-notext.svg.png" width="100px" height="95px">
                        </td>
                        <td>
                            <font size="4" style="font-family:Calibri">
                                <b>Python</b> - Básico / Intermediário. quase 1 ano de experiência.
                            </font>
                        </td>
                    </tr>
                    <!--PHP-->
                    <tr>
                        <td>
                            <img src="imagens/1200px-PHP-logo.svg.png" width="110px" height="90px">
                        </td>
                        <td>
                            <font size="4" style="font-family:Calibri">
                                <b>PHP</b> - Básico. Quase 1 ano de experiência.
                            </font>
                        </td>
                    </tr>
                    <!--HTML-->
                    <tr>
                        <td>
                            <img src="imagens/1200px-HTML5_logo_and_wordmark.svg.png" width="100px" height="95px">
                        </td>
                        <td>
                            <font size="4" style="font-family:Calibri">
                                <b>HTML5</b> - Intermediário. Quase 1 ano de experiência.
                            </font>
                        </td>
                    </tr>
                    <!--CSS-->
                    <tr>
                        <td>
                            <img src="imagens/CSS3_logo_and_wordmark.svg.png" width="90px" height="100px">
                        </td>
                        <td>
                            <font size="4" style="font-family:Calibri">
                                <b>CSS3</b> - Básico. Alguns meses de experiência.    
                            </font>
                        </td>
                    </tr>
                </table>

                <p>
                    <!--Aqui chega a parte dos projetos-->
                    <a name="escolha4">
                        <font color="green" size="5"><b>Projetos</b></font>
                    </a>
                </p>

                <h3>Batalha naval: </h3>É um jogo simples porém muito intuitivo e com muitas manipulações de 
                vetores e de valores.<br>Nesse projeto tive que usar muitas estruturas e contas matemáticas para criá-lo.<br><br>

                <table>
                    <tr>
                        <td>
                            <img src="imagens/batalha-naval.jfif" width="330px" height="220px">
                        </td>
                        <td>
                            O jogo é simplesmente como o batalha-naval original, já que o jogador 1 e o jogador 2
                            escolhem as posições<br>(coluna e linha) para seu navio ficar, e quem derrubar o navio
                            do oponente primeiro ganha.
                        </td>
                    </tr>
                </table>

                <div id="texto-abaixo">
                    Linguagem usada: C++
                </div>

                <h3>Login: </h3>É o básico que provavelmente todos que um dia desejam atuar na área da web devem saber,
                porém foi um bom projeto para se colocar aqui já que fiz<br>a verificação validação e segui todos os passos técnicos
                para que os dados colocados pelo usuário, estivessem em um sistema mais seguro possível.<br><br>

                <table>
                    <tr>
                        <td>
                            <img src="imagens/Login.jpeg" width="330px" height="190px">
                        </td>
                        <td>
                            Esse sistema foi criado com um login de campos de usuário e senha, usando o banco de dados MySql.
                        </td>
                    </tr>
                </table>

                <div id="texto-abaixo">
                    Linguagem usada: HTML, PHP
                </div>

                <h3>Agenda: </h3>Foi um projeto que criei para testar e ultilizar meus conhecimentos para me ajudar a organizar
                meus dados e meus dias, mesmo precisando de um banco<br>de dados para guardar esses dados como um crud, foi um 
                grande projeto ainda assim, já mostrando para mim como seria já a sua estrtura principal.<br><br>

                <table>
                    <tr>
                        <td>
                            <img src="imagens/Agenda.jpeg" width="330px" height="220px">
                        </td>
                        <td>
                            Esse programa seria basicamente como vemos na imagem ao lado, um menu principal, que podemos adicionar,<br>
                            excluir e até listar por exemplo esses dados e separá-los em ordem do mais relevante até o menos relevante.
                        </td>
                    </tr>
                </table>

                <div id="texto-abaixo">
                    Linguagem usada: Python
                </div>

                <h3>Crud: </h3>Foi um grande projeto, que estou me aperfeiçoando ainda nessas partes, mas como quero me aperfeiçoar em
                desenvolvimento web eu tenho muito que<br>aprender, mas gostei muito de fazer e executar esse sistema<br><br>
                
                <table>
                    <tr>
                        <td>
                            <img src="imagens/clientes_crud.jpeg" width="330px" height="220px">
                        </td>
                        <td>
                            <img src="imagens/adicionandoCliente_crud.jpeg" width="330px" height="220px">
                        </td>
                        <td>
                            Esse sistema foi um teste e um estudo que fiz para aprender essa<br>tecnologia chamada CRUD, é parecido como
                            um registro de usuários.
                        </td>
                    </tr>
                </table>

                <div id="texto-abaixo">
                    Linguagem(s) usada: HTML, CSS, PHP 
                </div>

                <p>
                    <!--Aqui chega a parte das experiências-->
                    <a name="escolha5">
                        <font color="green" size="5"><b>Experiências</b></font>
                    </a>
                </p>
    
                <li>
                    Uma experiência que estou ainda vivendo é ter conseguido projetar o site da minha turma, que atualizo a cada trabalho e prova:
                    <a href="http://ifmtedificacoes-vg.epizy.com/?i=1"><b>Site</b></a>
                </li>

            </div>

        </font>
        <br>
        <hr>
        <font color="gray">
            <center>
                Site projetado por: Luiz
            </center> 
        </font>
        <br>
    </body>
</html>