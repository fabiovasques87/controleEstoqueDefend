<?php
session_start();

// var_dump($_SESSION);
require 'model/con.php';

if(empty($_SESSION['lg'])) {
    header("Location: home.php");
    exit;
}
?>


<?php

require 'class/lancamento-class.php';

$lancamento = new Lancamento();

// $lista = $medico->pesquisar();
  foreach ($lista as $item):


?>
<?php endforeach; 
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
<link rel="stylesheet" type="text/css" href="assets/css/styleLancamento.css">
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
            <div class="sair"><a href="sair.php"><i class="fa-solid fa-right-from-bracket"></i>sair</a> </div>


          
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
                      <nav class="sb-sidenav   style="width:180px;" id="sidenavAccordion">
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

          <div class="form">        
                <form method="POST" action="update_materiais.php">
                        <!--comeco da linha-->
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="titulo--prod">Lançamento de Produtos</div>
                                    </div>
                        <!--fim da linha-->
                        <div class="row">

                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="prod">Cod Produto</label><span class="campo--obrigatorio">*</span>
                                            <input type="number" name="produto_codProd" class="form-control" id="codProd" placeholder="Codigo do produto">
                                            <!-- <input type="hidden" value="12" name="produto_codProd">  -->
                                            <div class="alerta" id="alert-preencher-codProd"></div>

                                    </div>        
                                </div>                                                              
                                    <div class="col-md-4">
                                        <div class="form-group">                                        
                                            <label class="prod">Descrição Do Produto</label><span class="campo--obrigatorio">*</span>
                                            <div id="resultado">  <input type="text" name="" class="form-control" id="nomeProd" placeholder="Nome do Produto"></div> 
                                                <div class="alerta" id="alert-preencher-nomeProd"></div>
                                        </div>        
                                    </div>                                                                       
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Inícial</label><span class="campo--obrigatorio">*</span>
                                            <input type="date" name="dataInicialCadastro" class="form-control" id="dataInicial-cadastro" required>
                                            <div class="alerta" id="alert-preencher-dataInicial-cadastro"></div>

                                    </div>        
                                </div>
                                <!-- FIm da linha-->        
                                </div>

                                 <!--comeco da linha-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Data Final</label><span class="campo--obrigatorio">*</span>
                                                <input type="date" name="dataFinalCadastro" class="form-control" id="datafinal-cadastro">
                                                <div class="alerta" id="alert-preencher-datafinal-cadastro"></div>

                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nome do Responsável</label><span class="campo--obrigatorio">*</span>

                                            <?php                                                                 
                                                         $lista = $lancamento->getPessoas();   
                                                  ?>

                                              <select class="form-control" name="pessoa_codPessoa" id="">
                                                <option>Selecionar</option>
                                                <?php 
                                                foreach ($lista as $item):
                                                ?>
                                                <option value="<?php echo $item['codPessoa'] ?>">

                                                  <?php echo $item['nomePessoa'] ?></option>


                                                   <?php endforeach;                                                    
                                             ?>
                                             
                                              </select>    

                                              <!-- <input type="text" value="<?php echo $item['codPessoa'] ?>" name="pessoa_codPessoa">  -->

                                                <!-- <input type="text" name="" class="form-control" id="pessoa_codPessoa" placeholder="Nome do Responsável"> -->
                                                <div class="alerta" id="alert-preencher-pessoa_codPessoa"></div>

                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Autorizado por quem?</label><span class="campo--obrigatorio">*</span>
                                            <select class="form-control"  name="nomeAutorizado" id="nomeAutorizado">
                                                <option>Seleciona uma Opção</option>
                                                <option>Isabel</option>
                                                <option>Camila</option>
                                                <option>Oliveira</option>
                                                <option>Sandro</option>
                                                <option>Tati</option>
                                            </select>
                                        </div>
                                        <div class="alerta" id="alert-preencher-nomeAutorizado"></div>        
                                    </div>
                                     <!-- FIm da linha-->        
                                    </div>

                                    <!--comeco da linha-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quem está liberando o material?</label><span class="campo--obrigatorio">*</span>
                                                <select class="form-control" name="nomeLiberacao" id="nomeLiberacao">
                                                    <option>Seleciona uma Opção</option>
                                                    <option>Isabel</option>
                                                    <option>Camila</option>
                                                    <option>Simone</option>
                                                  </select>

                                                    <!-- <input type="text" name="nomeLiberacao" class="form-control" id="nomeLiberacao" placeholder="Quem Está Liberando o Material?"> -->
                                                    <div class="alerta" id="alert-preencher-nomeLiberacao"></div>

                                            </div>        
                                        </div>
                                            <div class="col-md-8 situacao">
                                                <div class="form-group">
                                                    <label>Situação</label><span class="campo--obrigatorio">*</span>
                                                    <select class="form-control" name="situacaoCadastro" id="situacaoCadastro">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>Encaminhado para concerto</option>
                                                        <option>Emprestado</option>
                                                        <option>Definitivo</option>
                                                    </select>
                                                    <div class="alerta" id="alert-preencher-situacaoCadastro"></div>

                                                </div>        
                                            </div>

                                            <!-- Envia o id um para o banco caso sejá escolhida a opcao de 
                                          situacao = emprestado-->
                                            <input type="hidden" value="1" id="campoHiddenEmpresa" name="empresaServico_codEmpresa">


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label id="empresaConcerto">Empresa (Responsável Concerto)</label>

                                                    <?php                                                                 
                                                         $lista = $lancamento->getEmpresa();   
                                                  ?>

                                                  <select class="form-control" name="empresaServico_codEmpresa" id="pessoa_codPessoa">
                                                    <option>Selecionar</option>
                                                    <?php 
                                                    foreach ($lista as $item):
                                                    ?>
                                                    <option value="<?php echo $item['codEmpresa'] ?>">

                                                      <?php echo $item['nomeEmpresa'] ?></option>


                                                      <?php endforeach;                                                    
                                                ?>
                                             
                                              </select> 





                                                    <!-- <select class="form-control" name="" id="empresaServico_codEmpresa" data-toggle="tooltip" 
                                                    data-placement="bottom" title="Só prencha se o equipamento for para concerto">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>MPE</option>
                                                        <option>outras</option>
                                                    </select> -->
                                                    <!-- <input type="hidden" value="1" name="empresaServico_codEmpresa">  -->
                                                </div>        
                                            </div>

                                             <!-- FIm da linha-->        
                                            </div>
                                            <!--comeco da linha-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>OBS</label>
                                                        <textarea  name="obsCadastro" id="obsCadastro"  class="outline form-control"></textarea>
                                                    </div>        
                                                </div>

                                             </div>

                    
                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton" id="botCad">Cadastrar</div>

                                        <!-- <input type="submit" value="enviar"> -->
                            </div>    

                            <div class="status">

                                    <div class="spinner-border" id="load" role="status">
                                       <div class="visually-hidden">Loading...</div>
                                    </div>
                                    <div class="erro"></div>
                                    <div class="sucesso"></div>
                            </div>
                                                        
                        </form>
                        <div id="resultado">
                          <!-- <input type="text" name="resultado" id="resultado"> -->
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
        <h5 class="modal-title" id="exampleModalToggleLabel2"></h5>
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
        <h5 class="modal-title" id="exampleModalToggleLabel2">Erro</h5>
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


<script src="assets/js/cad-lancamento.js"></script>
<script src="assets/js/listaDados.js"></script> 

<!-- Link aobaixo para funcionar o meu dropdow -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>