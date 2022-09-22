<?php

	include 'class/produto-class.php';

	$produto = new Produto();

	
		

		$codProd = $_POST['codProd'];
		$descProd = $_POST['descProd'];
		


		$produto ->adicionar($codProd,$descProd);

	