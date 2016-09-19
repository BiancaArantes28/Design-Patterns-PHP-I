<?php
	class Orcamento{
		
		private $valor;
		private $itens;
		
		function __construct($novoValor){
			$this->valor = $novoValor;
			$this->itens = array();
		}
		
		public function getItens(){
			return $this->itens;
		}
		
		public function addItem(Item $novoitem){
			$this->itens[] = $novoitem;
		}
		
		public function getValor(){
			return $this->valor;
		}
	}
?>