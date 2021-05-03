<?php
// COOKIE
// Se usarmos o negativo retiramos um cookie
setcookie('user', 'Luiz Eduardo', time()+3600); // se quisermos tirar esse campo, só passar -3600
setcookie('email', 'eluiz8204@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);
//var_dump($_COOKIE);

//Mostrar só um determinado valor:
echo $_COOKIE['ultima_pesquisa']; 
