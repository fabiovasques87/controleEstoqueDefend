<?php

class Editar {

	private $pdo;

	public function __construct( ) {

		//conexão banco de dados

		$this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030",
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")	
		);
	
		}


public function editar ( ) {


//  empty($_POST['produto_codProd'])) 
//     //Se for vázio

//     print '<div class="alert alert-danger" role="alert">
//       Favor preencher o Codigo do produto!
//     </div>';
//     print '<script>window.setTimeout(function(){window.location=\'editar_materiais.php\';}, 2000);</script>';
    
// } else {

//pega o cod que se deseja modificar
$produto_codProd = $_POST["produto_codProd"];
$dataBaixa = $_POST["dataBaixa"];
$statusMaterial = $_POST["statusMaterial"];
//O novo valor do campo a ser modificado



// 
    //defino os parâmetros de conexão com o banco de dados
    //$pdo = new PDO('mysql:host=localhost;dbname=bd-gbi', $username, $password);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //preparo minha query
    
    $sql = "UPDATE lancamento SET produto_codProd=:produto_codProd, dataBaixa = :dataBaixa, statusMaterial=:statusMaterial
     WHERE produto_codProd= :produto_codProd";
     
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':dataBaixa', $dataBaixa);
    $sql->bindValue(':statusMaterial', $statusMaterial);
    $sql->bindValue(':produto_codProd', $produto_codProd);

    
    
    $sql->execute();


    if($sql->rowCount() > 0) {
        // return true;
        echo json_encode($sql);

    } else {
        // return false;
        echo json_encode("erro");

    }

    

    

    // print '<div class="alert alert-success" role="alert">
    //       Atualizado com Sucesso!
    //     </div>';
    // print '<script>window.setTimeout(function(){window.location=\'editar_materiais.php\';}, 2000);</script>';

}
}

