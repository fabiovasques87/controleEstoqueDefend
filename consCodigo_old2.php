<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style-consCodigo.css">
    <title>Listagem de dados do banco</title>
    <script type="text/javascript" src="assets/js/jquery.js"></script>

</head>
<body>

<div class="containner">

        <form>
            <label>Consultar produtos</label>
            <input type="text" name="consultar" id="campo" placeholder="Informe o Codigo do Produto">
            <!-- <button id="butconsultar" onclick="clicar()">Consultar </button> -->

        </form>

 </div>

        <div id="resultado">
                <?php
                
                    require 'controller/con.php';

                    $stmt = $pdo->query('                    
                    SELECT codProd,nomePessoa,nomeProd,dataInicialCadastro,dataFinalCadastro,situacaoCadastro
                    FROM produto prod
                    INNER JOIN lancamento l on prod.codProd = l.produto_codProd
                    INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa;
                    ');

                        ?>

                        <table>
                            <thead>
                                <tr>
                                    <td>Codigo</td>
                                    <td>Nome</td>
                                    <td>Nome Produto</td>
                                    <td>Data Inicial</td>
                                    <td>Data Final</td>
                                    <td>situacao</td>


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
                                    <td><?php echo $row['dataInicialCadastro']; ?></td>
                                    <td><?php echo $row['dataFinalCadastro']; ?></td>
                                    <td><?php echo $row['situacaoCadastro']; ?></td>




                                </tr>
                            </tbody>    

                            <?php
                        }



                ?>

        </div>      
<script type="text/javascript" src="assets/js/consCodigo.js"></script>
<script src="assets/js/js.js"></script>
</body>
</html>