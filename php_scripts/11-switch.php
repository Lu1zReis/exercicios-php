<?php
$cor = "amarelo";
switch($cor):
	case "vermelho":
	print "sua cor favorita é vermelho";
	break;

	case "verde":
	print "sua cor favorita é verde";
	break;

	case "azul":
	print "sua cor favorita é o azul";
	break;

	default:
	echo "sua cor favorita não é nenhuma das outras 3, é ". $cor;

endswitch;