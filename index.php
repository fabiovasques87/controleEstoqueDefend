<?php
session_start();

// var_dump($_SESSION);
require 'model/con.php';

if(empty($_SESSION['lg'])) {
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style3.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
<!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<!-- link para icones -->
<script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

<script src="assets/js/js.js"></script>

<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

</script>

</head>
<body>



<div class="container--pessoal">
    <header class="header--info">
            <div class="titulo">controle de materiais -- defend--</div>
            <div class="bem-vindo">Bem vindo:<?php echo $_SESSION['nome']; ?></div>
            <div class="sair"><a href="sair.php"><i class="fa-solid fa-right-from-bracket"></i>Sair</a> </div>

            <!-- <div class="sobre">Sobre</div> -->
          <div class="menu-opener">
              <div class="menu--opener1"> </div>
              <div class="menu--opener2"> </div>
              <div class="menu--opener3"> </div>
          </div>      
    </header>
    <aside>
        <div class="menu">
       
                  <div id="layoutSidenav">
                  <div id="layoutSidenav_nav">
                      <nav class="sb-sidenav"  style="width:180px;" id="sidenavAccordion">
                          <div class="sb-sidenav-menu">
                              <div class="nav" style="font-size:22px">                                                                                            
                                  <!--logo menu <img style="width:200px;height:150px;padding: 10px;  color:#000000; " src="img/logo1.png"> -->
                                  <a class="nav-link" href="index.php" style="color: #ffffff;" >
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-table-columns"></i>
                                      DASHBOARD
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboardteste" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <!-- <a class="nav-link" id="texto" href="index.php">Produtos</a> -->
                                      </nav>
                                  </div>                              

                                  <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#cadastros" aria-expanded="false" aria-controls="cadastros">
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-plus"></i>
                                      CADASTROS
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="cadastros" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" id="texto" href="cad-prod.php">Produtos</a>
                                          <a class="nav-link" id="texto" href="cad-empresa.php">Empresas</a>                                                                                
                                          <a class="nav-link" id="texto" href="lancamento.php">Lançamentos</a>                                                                                
                                          <a class="nav-link" id="texto" href="cad-pessoa.php">Pessoa</a>                                                                                



                                      </nav>
                                  </div>                              
                                  <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#consultas" id="texto" aria-expanded="false" aria-controls="consultas">                                      
                                  <div class="sb-nav-link-icon"></div><i class="fa-solid fa-magnifying-glass"></i>
                                      CONSULTAS  
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="consultas" style="color:#112A46" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                          <a class="nav-link collapsed" id="texto"  href="consCodigo.php">
                                              Códigos
                                              <div class="sb-sidenav-collapse-arrow"></div>
                                          </a>
                                          <a class="nav-link collapse" id="texto" href="consPessoa.php">
                                              Pessoas
                                              <div class="sb-sidenav-collapse-arrow"></div>
                                          </a>                                      
                                      </nav>
                                </div>
                                <div class="nav" style="font-size:22px">                                                                                            
                                  <!--logo menu <img style="width:200px;height:150px;padding: 10px;  color:#000000; " src="img/logo1.png"> -->
                                  <a class="nav-link" href="sobre.php" style="color: #ffffff;" >
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-table-columns"></i>
                                      Sobre
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboardteste" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <!-- <a class="nav-link" id="texto" href="index.php">Produtos</a> -->
                                      </nav>
                                  </div>  
                                  <div class="nav" id="sair--mobile" style="font-size:22px">                                                                                            
                                  <!--logo menu <img style="width:200px;height:150px;padding: 10px;  color:#000000; " src="img/logo1.png"> -->
                                  <a class="nav-link" href="sair.php" style="color: #ffffff;" >
                                      <div class="sb-nav-link-icon"></div><i class="fa-solid fa-right-from-bracket"></i>
                                      Sair
                                      
                                      <div class="sb-sidenav-collapse-arrow"></div>
                                  </a>
                                  <div class="collapse" id="dashboardteste" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <!-- <a class="nav-link" id="texto" href="index.php">Produtos</a> -->
                                      </nav>
                                  </div>  
                                
                                  
                          
                      </nav>
              </div>
          </div>
        </div>
    </aside>
    <section>
                <div class="painelCards">

                    <div class="card--sub--1">
                        <div class="card" >
                                <div class="card-body">
                                    <h5 class="card-title">Prazo de entrega vencido</h5>
                                    <div class="sub--title">

                                    <?php 

                                              //Contar quantidade de serviços
                                              //require '../../config.php';

                                              require 'controller/con.php';
                                              $sql = "
                                              
                                              
                                              SELECT COUNT(*) as c, codProd, codCadastro,nomePessoa,descProd,dataInicialCadastro,dataFinalCadastro,situacaoCadastro
                                              FROM produto prod
                                              INNER JOIN lancamento l on prod.codProd = l.produto_codProd
                                              INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa
                                              
                                               WHERE
                    
                                               dataFinalCadastro < current_date()
                    
                                              AND statusMaterial = 'A' ";


                                    
                                              $sql= $pdo->query($sql);
                                              $sql=$sql->fetch();
                                              $total= $sql['c'];
                                             
                                               echo $total;
                                              

                                          ?>



                                    </div>
                                    <div class="icones--card"><i class="fas fa-exclamation-triangle"></i></div>
                                    <a href="materiais-vencidos.php" class="btn btn-success"><span>Acessar</span></a><br />
                                </div>
                        </div>
                    </div>
                    <div class="card--sub--2">
                        <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Prazo de entrega à vencer</h5>
                                    <div class="sub--title dev">


                                    <?php

                                    $sql = "

                                    
                                    SELECT COUNT(*) AS vencer, codProd, codCadastro,nomePessoa,descProd,dataInicialCadastro,dataFinalCadastro,situacaoCadastro
                                    FROM produto prod
                                    INNER JOIN lancamento l on prod.codProd = l.produto_codProd
                                    INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa
                                    
                                     WHERE
                                    dataFinalCadastro BETWEEN CURRENT_DATE AND date_add(CURRENT_DATE , INTERVAL 10 day)  
                                    AND statusMaterial='A' AND situacaoCadastro <> 'Definitivo';
                                      ";
                                      $sql= $pdo->query($sql);
                                      $sql=$sql->fetch();
                                      $total= $sql['vencer'];
                                     
                                       echo $total;
                                    ?>                                      

                                    </div>
                                    <div class="icones--card"><i class="fa-solid fa-bell-slash"></i></div>
                                    <a href="materiais-a-vencer.php" class="btn btn-success "><span>Acessar</span></a>
                                
                                </div>
                        </div>        
                    </div>
              </div> 

        
                                       

<!-- area do modal sobre -->

<!-- <div class="WindowAreaSobre">
    <div class="WindowBodySobre">
       <div class="texto1">
            A plicação tem como objetivo gerenciar a saída de materiais do estoque, bem como 
            saber quem foi a pessoa que está de posse do referido material, também é posível observar
            na Dashboard da aplicação as notificações de materiais com 30 dias ou mais sem devolução.
       </div>

       <span>Sistema Desenvolvido por Fábio Vasques</span>
       
        <div class="buttons">

            <div class="cancelButtonSobre" id="botCad" onclick="closeModalSobre()">SAIR</div>
         </div>    
        <div id="alert-preencher-cod">Preencher campo codigo</div>

    </div>
</div>     -->

<!--Modais-->

<!--Modal pra Preencher cod-->

<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Campo Obrigatório!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Favor Preencher o Campo com o Codigo do Produto!
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Modal para testes-->
 <!-- <div id="alert-preencher-cod" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div> -->



<!--Modal pra Preencher Nome prod-->

<div class="modal fade" id="alert-preencher-nome2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Campo Obrigatório!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Favor Preencher o Campo com o Codigo do Produto!
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!--Sucesso -->

<div class="modal" id="ModalSucesso" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tituloModalSucesso"><i class="fa-solid fa-check"></i>Sucesso</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>

<!--Erro ao cadastrar -->

<div class="modal" id="ModalErro" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tituloModalError"><i class="fa-solid fa-triangle-exclamation"></i>Codigo Já cadastrado</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>
<!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">Open first modal</a> -->
<script src="assets/js/cad-prod.js"></script>
<!--Link aobaixo para funcionar o meu dropdow-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>