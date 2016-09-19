<?php
	
	class Conservador implements Investimento{
		public function calcula(Conta $conta){
			return $conta->getValor() * 0.008;
		}
	}
?>