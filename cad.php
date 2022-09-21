

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="prod">Cod Produto</label>
                                            <input type="number" name="cod-produto" class="form-control" id="cod-produto" placeholder="Codigo do Produto">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="header--prod">Lançamento de Materiais</div>
                                        <label class="prod">Nome Do Produto</label>
                                            <input type="text" name="nome-produto" class="form-control" id="nome-produto" placeholder="Nome Do Produto">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Inícial</label>
                                            <input type="date" name="data-inicio" class="form-control" id="data-inicio">
                                    </div>        
                                </div>
                                <!-- FIm da linha-->        
                                </div>

                                 <!--comeco da linha-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Data Final</label>
                                                <input type="date" name="data-final" class="form-control" id="data-final">
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nome do Responsável</label>
                                                <input type="text" name="nome-responsavel" class="form-control" id="nome-responsavel" placeholder="Nome do Responsável">
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Autorizado por quem?</label>
                                            <select class="form-control" name="nome-autorizado" id="nome-autorizado">
                                                <option>Seleciona uma Opção</option>
                                                <option>Camila</option>
                                                <option>Oliveira</option>
                                                <option>Sandro</option>
                                                <option>Tati</option>
                                            </select>
                                        </div>        
                                    </div>
                                     <!-- FIm da linha-->        
                                    </div>

                                    <!--comeco da linha-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quem está liberando o material?</label>
                                                    <input type="text" name="nome-liberado" class="form-control" id="nome-liberado" placeholder="Quem Está Liberando o Material?">
                                            </div>        
                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Situação</label>
                                                    <select class="form-control" name="situacao" id="situacao">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>Encaminhado para Conserto</option>
                                                        <option>Emprestado</option>
                                                        <option>Definitivo</option>
                                                    </select>
                                                </div>        
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Empresa (Responsável Concerto)</label>
                                                    <select class="form-control" name="situacao" id="situacao" data-toggle="tooltip" 
                                                    data-placement="bottom" title="Só prencha se o equipamento for para concerto">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>MPE</option>
                                                        <option>outras</option>
                                                    </select>
                                                </div>        
                                            </div>

                                             <!-- FIm da linha-->        
                                            </div>
                                            <!--comeco da linha-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>OBS</label>
                                                        <textarea  name="obs" id="obs"  class="outline form-control"></textarea>
                                                    </div>        
                                                </div>

                                             </div>

                    
                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton">Cadastrar</div>
                            </div>    
                        
                        </form>
                    </div>

        </div>



        <!--Abrir Modal Inserir-->
        <div class="WindowAreaInserir">
            <div class="WindowBodyInserir">
                <div class="form">
                    
                    <form method="POST" action="">
                        <!--comeco da linha-->
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="header--prod">Lançamento de Materiais Modal</div>
                                        <label class="prod">Cod Produto</label>
                                            <input type="text" name="codProd" class="form-control" id="codProd" placeholder="Codigo do produto">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label class="prod">Nome Do Produto</label>
                                            <input type="number" name="cod-produto" class="form-control" id="cod-produto" placeholder="Nome do Produto">
                                    </div>        
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Inícial</label>
                                            <input type="date" name="data-inicio" class="form-control" id="data-inicio">
                                    </div>        
                                </div>
                                <!-- FIm da linha-->        
                                </div>

                                 <!--comeco da linha-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Data Final</label>
                                                <input type="date" name="data-final" class="form-control" id="data-final">
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nome do Responsável</label>
                                                <input type="text" name="nome-responsavel" class="form-control" id="nome-responsavel" placeholder="Nome do Responsável">
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Autorizado por quem?</label>
                                            <select class="form-control" name="nome-autorizado" id="nome-autorizado">
                                                <option>Seleciona uma Opção</option>
                                                <option>Camila</option>
                                                <option>Oliveira</option>
                                                <option>Sandro</option>
                                                <option>Tati</option>
                                            </select>
                                        </div>        
                                    </div>
                                     <!-- FIm da linha-->        
                                    </div>

                                    <!--comeco da linha-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quem está liberando o material?</label>
                                                    <input type="text" name="nome-liberado" class="form-control" id="nome-liberado" placeholder="Quem Está Liberando o Material?">
                                            </div>        
                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Situação</label>
                                                    <select class="form-control" name="situacao" id="situacao">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>Encaminhado para Conserto</option>
                                                        <option>Emprestado</option>
                                                        <option>Definitivo</option>
                                                    </select>
                                                </div>        
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Empresa (Responsável Concerto)</label>
                                                    <select class="form-control" name="situacao" id="situacao" data-toggle="tooltip" 
                                                    data-placement="bottom" title="Só prencha se o equipamento for para concerto">
                                                        <option>Seleciona uma Opção</option>
                                                        <option>MPE</option>
                                                        <option>outras</option>
                                                    </select>
                                                </div>        
                                            </div>

                                             <!-- FIm da linha-->        
                                            </div>
                                            <!--comeco da linha-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>OBS</label>
                                                        <textarea  name="obs" id="obs"  class="outline form-control"></textarea>
                                                    </div>        
                                                </div>

                                             </div>

                    
                            <div class="buttons">

                                        <div class="cancelButton" onclick="closeModal()">Cancelar</div>

                                        <div class="cadastrarButton">Cadastrar</div>
                            </div>    
                        
                        </form>
                    </div>
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

            <div class="cancelButtonSobre" onclick="closeModalSobre()">SAIR</div>
         </div>    


    </div>
</div>    


</body>
</html>