<?php

class país{
    public $idioma;
    public $pessoas;
    
    public function governo(){
        echo "Leis";
    }
}

class Brasil extends país{
}
class USA extends país{
}

$brasil = new Brasil();
$usa = new USA();
$usa->idioma = "english";
$brasil->idioma = "pt-br";
var_dump($usa, $brasil);
