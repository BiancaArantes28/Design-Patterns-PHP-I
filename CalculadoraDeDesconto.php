<?php
	require_once "Desconto500Reais.php";
	require_once "Desconto5Itens.php";
	require_once "SemDesconto.php";
	
	class CalculadoraDeDesconto{
		public function desconto(Orcamento $Orcamento){
			$desconto5Itens = new Desconto5Itens();
			$desconto500Reais = new Desconto500Reais();
			$SemDesconto = new SemDesconto();
			
			$desconto5Itens->setProximo($desconto500Reais);
			$desconto500Reais->setProximo($SemDesconto);
			
			$valorDesconto = $desconto5Itens->desconto($Orcamento);
			
			return $valorDesconto;
			
		}
	}
?>