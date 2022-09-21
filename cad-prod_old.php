

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
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
    <header>
        <div class="titulo">controle de materiais -- defend--</div>
        <div class="bem-vindo">Bem vindo:Fulano</div>
        <!-- <div class="sobre">Sobre</div> -->
     <div class="menu-opener">
        <div class="menu--opener1"> </div>
        <div class="menu--opener2"> </div>
        <div class="menu--opener3"> </div>
     </div>
    </header>
    <aside>
        <div class="menu">
            <nav>
            <!-- <div class="menu--item">Lancamentos</div>
            <div class="menu--item">Baixas</div>
            <div class="menu--item">Pesquisar</div> -->
            <ul>
                
                <li class="fa-solid fa-table-columns">&nbsp;<a href="index.html">Dashboard</a></li>
                <li class="fa-solid fa-plus">&nbsp;<a href="cad.html">lançar materiais</a></li>
                <!-- <li class="fa-solid fa-trash">&nbsp;<a href="#">Baixar Materiais</a></li> -->
                <li class="fa-solid fa-magnifying-glass">&nbsp;<a href="pesquisar.html">Pesquisar Materiais</a></li>
                <li class="fa-solid fa-address-card" onclick="abrirModalSobre()">&nbsp;<a href="#">Sobre</a></li>


            </ul>
        </nav>
        </div>
    </aside>
    <section>
        <div class="dashboard">

                <div class="form">
                    
                    <form method="POST" action="">
                         <!--comeco da linha-->
                         <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="titulo--prod">Cadastro de Produto smartphone</div>
                                    </div>
                        <!--fim da linha-->
                        </div>
                        <div class="row">                        
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label class="prod">Cod do Produto</label><span class="campo--obrigatorio">*</span>
                                            <input type="text" name="codProd" class="form-control" id="codProd" placeholder="Insira o Codigo do produto">
                                            <div class="alerta" id="alert-preencher-cod"></div>

                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="prod">Nome do Produto</label><span class="campo--obrigatorio">*</span>
                                            <input type="text" name="nomeProd" class="form-control" id="nomeProd" placeholder="Insira o nome do Produto">
                                            <div class="alerta" id="alert-preencher-nome"></div>
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Descrição do Produto</label>
                                            <input type="text" name="descProd"  class="form-control" id="DesProd" placeholder="Insira a descrição do produto" >
                                    </div>        
                                </div>
                                <!-- FIm da linha-->        
                                </div>                                 
                                    

                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton" id="botCad" onclick="clickCad()">Cadastrar</div>

                            </div>    

                            <div class="row">
                                <div class="col-md-12">
                               
                                        <div class="spinner-border" id="load" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                        </div>
                                    <div class="erro"></div>
                                    <div class="sucesso"></div>
                                </div>
                            </div>
                </div>

        </div>



        <!--Abrir Modal Inserir-->
        <div class="WindowAreaInserir">
            <div class="WindowBodyInserir">
                <div class="form">
                    
                    <form method="POST" action="insert_produto.php" id="form">
                        <!--comeco da linha-->
                        <div class="row">
                                
            </div>
        </div>

        
                                       

<!-- area do modal sobre -->

<div class="WindowAreaSobre">
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
</div>    

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

<div class="modal fade" id="alert-preencher-nome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



<script src="assets/js/cad-prod.js"></script>

</body>
</html>