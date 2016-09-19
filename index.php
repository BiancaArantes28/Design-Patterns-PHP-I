<?php 
	require "Orcamento.php";
	require "Item.php";
	require "CalculadoraDeImposto.php";
	require "CalculadoraDeDesconto.php";
	require "Desconto.php";
	require "Desconto500Reais.php";
	require "Desconto5Itens.php";
	require "SemDesconto.php";
	require "Imposto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";
	
	$reforma = new Orcamento(501);
	
	$calculadora = new CalculadoraDeImposto();
	
	echo $calculadora->calcula($reforma,new ICMS());
	
	echo "<br />";
	
	echo $calculadora->calcula($reforma,new ISS());
	
	echo "<br />";
	
	echo $calculadora->calcula($reforma,new KCV());
	
	// Descontos //
	
	echo "Teste de descontos. <br />";
	
	$desconto = new CalculadoraDeDesconto();
	
	echo "Descontos<br />";
	
	$reforma->addItem(new Item("Tijogo",250));
	$reforma->addItem(new Item("Cimento",250));
	
	echo $desconto->desconto($reforma);
	
	
?>