<?php

/*
	?>
	<pre>
		<?php
	var_dump($_POST);
		?>
	</pre>

*/


	include 'class/editar-class-materiais.php';

	$editar = new Editar();


	$$produto_codProd = $_POST['$produto_codProd'];
	$dataBaixa = $_POST['dataBaixa'];
	$statusMaterial = $_POST['statusMaterial'];

	

		$editar ->editar($produto_codProd,$dataBaixa,$statusMaterial);
