<?php
// Datas
// Defenir o local
date_default_timezone_set('America/Sao_Paulo');

echo date('d/m/y')."<br>";
// Exibe a data mais formatada
echo date('D/M/Y')."<br>";
// Exibe o dia da semana
echo date('l')."<br>";
// Exibe a hora no formato de 12hrs
echo date('h')."<br>";
// Exibe a hora no formato de 24hrs
echo date('H:i:s');

echo "<hr>";
// Para converter uma data string
// STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);