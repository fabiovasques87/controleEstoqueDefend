<?php 

// var_dump($_POST);
session_start();
// require 'config.php';

try {

	$pdo = new PDO("mysql:dbname=controle-estoque;host=localhost","fabio","F@bio102030",
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")		
);

} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;



}




     $userLogin = $_POST['user'];
     $senhaLogin = md5($_POST['password']);

    //  $senhaLogin = $_POST['password'];



// $sql = "SELECT * FROM usuarios WHERE email = :email ";
// $sql = $pdo->prepare($sql);
// $sql->bindValue(":email", $email);
// $sql->execute();

// $sql = "SELECT * FROM usuarios WHERE senha = MD5(:senha)";
// $sql = $pdo->prepare($sql);
// //$sql->bindValue(":email", $email);
// $sql->bindValue(":senha", $senha);
// $sql->execute();



$sql = "
SELECT nomePessoa, codLogin,userLogin,senhaLogin
FROM login l
INNER JOIN pessoa p on l.pessoa_codPessoa = p.codPessoa
    WHERE  
userLogin =:userLogin AND senhaLogin =:senhaLogin";

// SELECT * FROM login WHERE   userLogin =:userLogin AND senhaLogin =:senhaLogin";
$sql = $pdo->prepare($sql);
$sql->bindValue(":userLogin", $userLogin);
$sql->bindValue(":senhaLogin", $senhaLogin);
$sql->execute();


//$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {

    $sql = $sql->fetch();
	echo json_encode($sql);

//  $sql =  " SELECT nomePessoa, codLogin
//   FROM login l
//   INNER JOIN pessoa p on l.pessoa_codPessoa = p.codPessoa";

     $cod = $sql['codLogin'];
     $nome = $sql['nomePessoa'];
    // $ip = $SERVER['REMOTE_ADDR'];
     $_SESSION['lg'] = $cod; 
     $_SESSION['nome'] = $nome;
    

}else{
	echo json_encode("erro");
}

