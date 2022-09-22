
<?php 

// var_dump($_POST);


$codProd = $_POST['codProd'];
$descProd= $_POST['descProd'];

class Produto {


private $pdo;

public function __construct( ) {

//conexão banco de dados

// $this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabiopopo","F@bio102030",
// array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")	
// );


// }


try {

	$this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030");

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();


}

}

//create



public function adicionar ($codProd,$descProd) {
if($this->verificaCod($codProd) == false) {
    $sql = $this->pdo->prepare("INSERT INTO produto SET codProd = :codProd,descProd =:descProd");
    

    $sql->bindParam(":codProd",$codProd);
    $sql->bindParam(":descProd",$descProd);
    $sql->execute();

    echo json_encode($sql);

    }else {
        echo json_encode("erro");
    }

}

private function verificaCod ($codProd) {

    $sql = "SELECT * FROM produto WHERE codProd = :codProd";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':codProd', $codProd);
    $sql->execute();

    if($sql->rowCount() > 0) {
        return true;
    } else {
        return false;
    }


}







}