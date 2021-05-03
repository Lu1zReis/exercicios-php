<?php

$crip = "123";
$SENHA = base64_encode($crip);
$senha = md5($crip);
echo $crip."<br>";
echo $SENHA."<br>";
echo $senha."<br>";
