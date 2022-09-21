<?php

	//var_dump($_POST);

	include 'class/lancamento-class.php';

	$lancamento = new Lancamento();

	
		

		$produto_codProd = $_POST['produto_codProd'];
		// $nomeProd = $_POST['nomeProd'];
		$dataInicialCadastro = $_POST['dataInicialCadastro'];
		$dataFinalCadastro = $_POST['dataFinalCadastro'];
		$pessoa_codPessoa = $_POST['pessoa_codPessoa'];
		$nomeAutorizado = $_POST['nomeAutorizado'];
		$nomeLiberacao = $_POST['nomeLiberacao'];
		$situacaoCadastro = $_POST['situacaoCadastro'];
		$empresaServico_codEmpresa = $_POST['empresaServico_codEmpresa'];
		$obsCadastro = $_POST['obsCadastro'];



		$lancamento ->adicionar($produto_codProd,$dataInicialCadastro,$dataFinalCadastro,
	$pessoa_codPessoa,$nomeAutorizado,$nomeLiberacao,$situacaoCadastro,$empresaServico_codEmpresa,$obsCadastro);

	