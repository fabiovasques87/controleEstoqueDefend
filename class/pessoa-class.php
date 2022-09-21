
<?php 




$nomePessoa = $_POST['nomePessoa'];
$cpfPessoa = $_POST['cpfPessoa'];
$telefonePessoa = $_POST['telefonePessoa'];

class Pessoa {


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



public function adicionar ($nomePessoa,$cpfPessoa,$telefonePessoa) {
if($this->verificaCod($cpfPessoa) == false) {
    $sql = $this->pdo->prepare("INSERT INTO pessoa SET nomePessoa = :nomePessoa, cpfPessoa = :cpfPessoa,
    telefonePessoa =:telefonePessoa");
    

    $sql->bindParam(":nomePessoa",$nomePessoa);
    $sql->bindParam(":cpfPessoa",$cpfPessoa);
    $sql->bindParam(":telefonePessoa",$telefonePessoa);
    $sql->execute();

    echo json_encode($sql);

    }else {
        echo json_encode("erro");
    }

}

private function verificaCod ($cpfPessoa) {

    $sql = "SELECT * FROM pessoa WHERE cpfPessoa= :cpfPessoa";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':cpfPessoa', $cpfPessoa);
    $sql->execute();

    if($sql->rowCount() > 0) {
        return true;
    } else {
        return false;
    }


}






}