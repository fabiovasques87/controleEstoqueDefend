
<?php 


$nomeEmpresa = $_POST['nomeEmpresa'];
$cidadeEmpresa = $_POST['cidadeEmpresa'];
$telEmpresa = $_POST['telEmpresa'];
$descEmpresa = $_POST['descEmpresa'];

class Empresa {


private $pdo;

public function __construct( ) {

//conexão banco de dados



try {

	$this -> pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030");

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();


}

}

//create



public function adicionar ($nomeEmpresa,$descEmpresa,$cidadeEmpresa,$telEmpresa) {
 if($this->verificaCod($codEmpresa) == false) {
    $sql = $this->pdo->prepare("INSERT INTO empresaServico SET  nomeEmpresa=:nomeEmpresa, 
    descEmpresa=:descEmpresa,cidadeEmpresa=:cidadeEmpresa,telEmpresa=:telEmpresa");
    

    $sql->bindParam(":nomeEmpresa",$nomeEmpresa);
    $sql->bindParam(":descEmpresa",$descEmpresa );
    $sql->bindParam(":cidadeEmpresa",$cidadeEmpresa );
    $sql->bindParam(":telEmpresa",$telEmpresa);


    $sql->execute();

    echo json_encode($sql);

    }else {
        echo json_encode("erro");
    }

}

private function verificaCod ($codEmpresa) {

    $sql = "SELECT * FROM empresaServico WHERE codEmpresa = :codEmpresa";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':codEmpresa', $codEmpresa);
    $sql->execute();

    if($sql->rowCount() > 0) {
        return true;
    } else {
        return false;
    }


}






}