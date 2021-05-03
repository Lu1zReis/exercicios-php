<?php
session_start();
$_SESSION['cor'] = 'Vermelho';
$_SESSION['carro'] = 'Gol';
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>";
echo session_id();