<?php
//esse arquivo home.php so pegara se o index.php for rodado, pois aqui nao definimos as sessoes 'carro', 'cor';
session_start();
echo $_SESSION['carro']."<br>".$_SESSION['cor']."<br>";
echo session_id();