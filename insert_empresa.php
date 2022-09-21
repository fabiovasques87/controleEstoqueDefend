<?php

/*Debugar o codigo	
var_dump($_POST);
	
*/


	include 'class/empresa-class.php';

	$empresa = new Empresa();

	
		

		$nomeEmpresa = $_POST['nomeEmpresa'];
		$cidadeEmpresa = $_POST['cidadeEmpresa'];
		$telEmpresa = $_POST['telEmpresa'];
		$descEmpresa = $_POST['descEmpresa'];


		$empresa ->adicionar($nomeEmpresa,$cidadeEmpresa,$telEmpresa,$descEmpresa);

	