<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

require 'con.php';

//$campo =$_POST['campo'];

$stmt = $pdo->query("SELECT * FROM produto where codProd like '".$_POST['produto_codProd']."' ");

?>

<!-- <table>
    <thead>
        <tr>
            <td>Codigo</td>
            <td>Descrição</td>
        </tr>
    </thead>     -->
<?php 

if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch())
        {

            ?>

            <!--Os dados da resposta da query irão aparecer no input text-->
            <input type="text" readonly="" class="form-control" value="<?php echo $row['descProd']; ?>">
    <?php
        }
}else{
    ?>
    <input type="text" readonly="" style="color:red;" class="form-control" value="Produto não cadastrado">
    <?php

}