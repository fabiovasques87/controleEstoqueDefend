<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

require 'con.php';

//$campo =$_POST['campo'];

$stmt = $pdo->query("
SELECT codProd,nomePessoa,nomeProd,dataInicialCadastro,dataFinalCadastro,situacaoCadastro,dataBaixa,statusMaterial,
nomeEmpresa
FROM produto prod
INNER JOIN lancamento l on prod.codProd = l.produto_codProd
INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa
inner join empresaServico emp on l.empresaServico_codEmpresa = emp.codEmpresa

  where codProd like '%".$_POST['consultar']."%'");

?>

            <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nome Pessoa</td>
                        <td>Nome Produto</td>
                        <td>Nome da Empresa Concerto</td>
                        <td>situacao Prod</td>
                        <td>Data Retirada</td>
                        <td>Data Baixa</td>
                        <td>status</td>

                    </tr>
                </thead>


<?php 

  

while ($row = $stmt->fetch())
{

    ?>

    <tbody>
        <tr>
            <td><?php echo $row['codProd']; ?></td>
            <td><?php echo $row['nomePessoa']; ?></td>
            <td><?php echo $row['nomeProd']; ?></td>
            <td><?php echo $row['nomeEmpresa']; ?></td>
            <td><?php echo $row['situacaoCadastro']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($row['dataInicialCadastro'])); ?></td>
            <!-- <td><?php echo date('d/m/Y', strtotime($row['dataBaixa'])); ?></td> -->
            <td><?php echo $row['dataBaixa']; ?></td>
            <td><?php echo $row['statusMaterial']; ?></td>

        </tr>
    </tbody>    

    <?php
}

if($stmt->rowCount() > 0) {
    return true;
} else {
    echo "
        <div style='color:red'>Código Não Encontrado</div>
    
    ";
//     echo "
//         <script>
//             var alert = document.querySelector('.alerta');
//             alert.style.display='block';
//         </script>
    
//     ";
 } 



?>
