<?php

// var_dump($_POST);

	include 'class/pessoa-class.php';

	$pessoa = new Pessoa();

	
		

		$nomePessoa = $_POST['nomePessoa'];
		$cpfPessoa = $_POST['cpfPessoa'];
		$telefonePessoa = $_POST['telefonePessoa'];
		


		$pessoa ->adicionar($nomePessoa,$cpfPessoa,$telefonePessoa);

	