<?php
	class CalculaInvestimento{
		public function calcula(Conta $conta, Investimento $investimento){
			$invest = $investimento->calcula($conta);
			$conta->deposita($invest * 0.75);
			return $conta->getValor();
		}
	}
?>