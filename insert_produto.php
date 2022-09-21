<?php

	include 'class/produto-class.php';

	$produto = new Produto();

	
		

		$codProd = $_POST['codProd'];
		$nomeProd = $_POST['nomeProd'];
		$descProd = $_POST['descProd'];
		


		$produto ->adicionar($codProd,$nomeProd,$descProd);

	