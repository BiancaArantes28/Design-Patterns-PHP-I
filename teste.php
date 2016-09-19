<?php
	require "CalculaInvestimento.php";
	require "Investimento.php";
	require "Conservador.php";
	require "Moderado.php";
	require "Conta.php";
	
	$conta = new Conta(500);
	$calculadora = new CalculaInvestimento();
	echo "Moderado: ";
	echo $calculadora->calcula($conta,new Moderado());
	
	echo "<br />";
	
	echo "Conservador: ";
	echo $calculadora->calcula($conta,new Conservador());
?>