<?php
	//require "Imposto.php";
	class CalculadoraDeImposto{
		public function calcula(Orcamento $Orcamento,Imposto $imposto){
			
				return $imposto->calcula($Orcamento);
			
		}
		
	}
?>