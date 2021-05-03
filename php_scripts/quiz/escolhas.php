<?php
namespace acerto;

class Acertos {

	public function Escolhas($valor1, $valor2)
	{

		if($valor1 == $valor2):
			return true;
		else:
			return false;
		endif;

	}
}
