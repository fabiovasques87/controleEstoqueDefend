<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<!-- link para icones -->
<script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

<script src="assets/js/js.js"></script>



</head>
<body>



<div class="container--pessoal">
    <header>
        <!-- <div class="titulo">controle de materiais -- defend--</div> -->
        <div class="bem-vindo">Bem vindo:Fulano</div>
        <div class="sobre">Sobre</div>
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

                <li class="fa-solid fa-plus"  onclick="abrirModal()">&nbsp;<a href=#>lançar materiais</a></li>
                <!-- <li class="fa-solid fa-trash">&nbsp;<a href="#">Baixar Materiais</a></li> -->
                <li class="fa-solid fa-magnifying-glass">&nbsp;<a href="#">Pesquisar Materiais</a></li>
                <li class="fa-solid fa-address-card">&nbsp;<a href="sobre.html">Sobre</a></li>


            </ul>
        </nav>
        </div>
    </aside>
    <section>
        <div class="WindowBody">
            <div class="form">
                
                <form method="POST" action="">
                    <!--comeco da linha-->
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome Do Produto</label>
                                        <input type="text" name="nome-produto" class="form-control" id="nome-produto">
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Início</label>
                                        <input type="date" name="data-inicio" class="form-control" id="data-inicio">
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data Final</label>
                                        <input type="date" name="data-final" class="form-control" id="data-final">
                                </div>        
                            </div>
    
                    <!-- FIm da linha-->        
                    </div>
    
                        <!--comeco da linha-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome do Responsável</label>
                                        <input type="text" name="nome-responsavel" class="form-control" id="nome-responsavel">
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Autorizado por quem?</label>
                                    <select class="form-control" name="nome-autorizado" id="nome-autorizado">
                                        <option>Camila</option>
                                        <option>Oliveira</option>
                                        <option>Sandro</option>
                                        <option>Tati</option>
                                    </select>
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Quem está liberando o material?</label>
                                        <input type="text" name="nome-liberado" class="form-control" id="nome-liberado">
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
    
                <!-- FIm da linha-->        
                </div>
                
                        <div class="buttons">
    
                                    <div class="cancelButton" onclick="closeModal()">Cancelar</div>
    
                                    <div class="cadastrarButton">Cadastrar</div>
                        </div>    
                    
                    </form>
                </div>
        </div>
    </div>
    </section>
</div>   



</body>
</html>