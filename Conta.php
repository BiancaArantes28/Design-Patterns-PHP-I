<?php
	class Conta{
		private $valor;
		
		function __construct($novoValor){
			$this->valor = $novoValor;
		}
		public function deposita($novovalor){
			$this->valor = $novovalor;
		}
		
		public function getValor(){
			return $this->valor;
		}
	}
?>