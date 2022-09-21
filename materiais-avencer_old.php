

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <link rel="icon" type="image/png" href="img/oleo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastro de Clientes</title>
        <script type="text/javascript" src="./js/jquery.js"></script>
        <script type="text/javascript" src="./js/cadastro-cliente.js"></script>
       
               <link href="css/styles.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        


        
                <!--Link para icones-->

                <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

                 <!--javascript para API IBGE Valida cep-->
        <script type="text/javascript" src="./js/validaCep.js"></script>
            <!--javascript para validar CPF/CNPJ-->
         <script type="text/javascript" src="./js/validaCpfCnpj.js"></script>
           <!--javascript para mascara  CPF/CNPJ-->
         <script src="https://unpkg.com/imask"></script>
          <!--javascript para mascara telefone-->
       <script type="text/javascript" src="./js/masTelefone.js"></script>


          <!--multiplos submit-->
              <script type="text/javascript">
                    function selecionaAction(script){
                        document.actionJava.action = script + '.php';
                        document.actionJava.submit();
                    }
           </script>


     <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>   

    <style type="text/css">
        
     body{
              padding: 20px;
              margin: 0px;
          }

          #texto{
            color: #ffffff;
          }

          .texto-modal {
            font-size: 35;
          }

          .fa-user {
            color: #000000;
          }

          .fa-check-circle{
            color: green;
            font-size: 40px;
          }

         

          .marcador{
             
             color: #ffffff;
             font-size: 12px;
          }

          .formulario{
             
             background-color: white;
              box-shadow: 3px 4px 8px 1px #808080;
              height: 800px;
             
            
            }
  
  
  


          .campo-obrigatorio{
            font-size: 20px;
            color: red;
          }

          .texto_card{
              background-color: #ffffff;
              
          }

          .bot {
            width: 140px;
            position: absolute;
            left: 20px;
            margin: 5px;
            padding:5px;

          }

            
              @media only screen and (min-width: 567px ) {

                    .formulario{
                    height: 100%;
                }

                /* classe para ajustar os botões de cadastro e limpar */

                .bot {
              
              width: 100px;
              position: absolute;
              left: 20px;
              margin: 5px;
              padding:5px;
  
              }

            }
  
            

    </style>


    </head>
    <body class="sb-nav-fixed">
        <nav class="nav-superior sb-topnav navbar navbar-expand navbar-dark " style="background-color: #ffffff;height: 80px;box-shadow: 3px 4px 8px 1px #808080;" >
            <a class="navbar-brand"  href="#" style="color:#000000">
                <!--<?php  require 'nome_sistema.php'; ?>-->
                <!-- primeiro logo --><img src="img/logo3.png" style="padding: 0px; margin: -10px;" height="210px; width:230px ">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" style="color:#000000" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <div class="marcador" style="color:#000000"><?php require 'listar.php';  ?></div>
    <ul class="navbar-nav ml-auto ml-md-0" style="color:#000000">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      
                       <!--icones -->
                        <a class="dropdown-item texto" href="sair.php">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                       &nbsp Trocar Usuário</a>

                   <a class="dropdown-item"   href="sobre.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg>
                       &nbsp Sobre</a>
                        

                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sair.php">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
                              <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
                        </svg>
                    &nbsp Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark"  style="background-color: #3B7FD9; box-shadow: 3px 4px 4px 1px #000000;  width: 220px;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" >
                            
                            <br />
                             <br >   
                             <br />
                             <br >   
                          
                            <!--logo menu <img style="width:200px;height:150px;padding: 10px;  color:#000000; " src="img/logo1.png"> -->
                            <a class="nav-link" href="index.php">
                                <div class=" sb-nav-link-icon"  id="texto">&nbsp&nbsp<i class="fas fa-tachometer-alt"></i> &nbsp&nbsp&nbsp  DASHBOARD</div>
                                
                            </a>
                            <a class="nav-link collapsed" href="#" style="color: #ffffff;" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon" "></div>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                </svg>&nbsp&nbsp&nbsp CADASTROS 
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" id="texto" href="cad-cliente.php">Cadastro Clientes</a>
                                    <a class="nav-link" id="texto" href="cad-veiculo.php">Cadastro Veiculos</a>
                                    
                                 
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" id="texto" aria-expanded="false" aria-controls="collapsePages">
                                

                                <!--icone-->&nbsp&nbsp
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                </svg>&nbsp&nbsp&nbsp CONSULTAS  
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>



                            <div class="collapse" id="collapsePages" style="color:#112A46" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" id="texto" href="cons-cliente.php">
                                        Clientes
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                     <a class="nav-link collapse" id="texto" href="cons-veiculo.php">
                                        Veiculos
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                  

                                </nav>
                           </div>



                            <a class="nav-link collapsed" href="#" data-toggle="collapse" id="texto" data-target="#relatorios" aria-expanded="false" aria-controls="relatorios">
                                

                                <!--icone-->&nbsp&nbsp
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-medical-fill" viewBox="0 0 16 16">
                                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-3 2v.634l.549-.317a.5.5 0 1 1 .5.866L7 7l.549.317a.5.5 0 1 1-.5.866L6.5 7.866V8.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L5 7l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V5.5a.5.5 0 1 1 1 0zm-2 4.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                                </svg>
                                 &nbsp&nbsp&nbsp RELATÓRIOS 
                                <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                            </a>



                            <div class="collapse" id="relatorios" style="color:#112A46" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" id="texto" href="relat_filtro.php">
                                        Troca de óleo
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                  

                                </nav>
                           </div>
                          
                            
                    
                </nav>
        </div>

            <!--conteudo do meio -->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <br />
                        <h1 class="mt-4">Trocas Faltando 30 dias Para o Vencimento</h1>
                        <br />
                        <hr />
                              <!--inicio da linha-->
                              <div class="row">

                              
                                      <!--Início da coluna-->          
                                      <div class="marcador col-md-12">

                            

                                          <?php 
    require '../../config.php';                

            $total = 0;
            $sql = "SELECT COUNT(*) as c FROM servicos";
            $sql = $pdo->query($sql);
            $sql = $sql->fetch();
            $total = $sql['c'];
            $paginas = $total / 100;



              $pg = 1;
              if (isset ($_GET['p']) && !empty($_GET['p'])){    //Se o p estiver setado e não estivere vázio
                  $pg = addslashes($_GET['p']);
              }

              $p = ($pg - 1) * 100; //vezes a quantidade de registros por página

            //puxar os registros do banco

              
                $sql = " 

                    select 
                      p.cod AS 'cod_veiculo',status_filtro_cabine,data_troca, v.placa_veiculo AS 'placa',
                        v.tipo_veiculo AS 'tipo', v.modelo_veiculo AS 'modelo',
                        c.nome_cliente AS 'nome', c.sobrenome_cliente AS 'sobrenome',v.status_veiculo,
                        c.telefone1_cliente AS 'telefone1',
                        p.fil AS 'filtro_combustivel', p.pro AS 'proxima_troca'
                    FROM
                      (SELECT
                          veiculo_cod_veiculo AS cod,status_filtro_cabine,data_troca, filtro_combustivel AS fil,
                          cliente_codcliente AS cli, max(proxima_troca) AS pro
                         FROM
                          servicos GROUP BY veiculo_cod_veiculo) p
                        INNER JOIN cliente c
                        ON p.cli = c.codcliente
                        INNER JOIN veiculo v
                        ON p.cod = v.cod_veiculo
                    WHERE
                       p.pro BETWEEN CURRENT_DATE  AND date_add(CURRENT_DATE , INTERVAL 30 day ) AND v.status_veiculo = 'ativo'                  
  


                   LIMIT $p, 100";
                   $sql = $pdo->query($sql);


                
             ?>          


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
       
                  
          <!--<table class="table-borded table-hover">-->
      <div class="table-responsive-sm">  
         <table class="table">    
          <form action="cad-troca2.php" method="POST">
            <thead class="thead-light">
              <tr>
                 
                <th>Nome</hd>
                <th>Sobrenome</th>
                <th>placa do veículo</th>
                 <th>Data da Troca</th>
                <th>proxima troca </th>
                <th>Telefone </th>
              
                 <th colspan="3" align="right">Ações </th>
              </tr>
            </thead>
              <?php 
                  if ($sql->rowCount() > 0){
                          foreach ($sql->fetchAll() as $item) {
           
                                //var_dump($item);

                        ?>  
           

                         <tbody>
              
                <tr>
                  
                  <td> 
                    <!--Campo hidden serve para enviar as informações de forma invisivel para
                      o usuario final-->
                     <input class="form-itens" type="hidden" name="telefone1_cliente" value="
                      <?php echo $item['nome'];  ?>" >
                      <?php echo $item['nome'];  ?> 
                  </td>
                  <td>
                     <input class="form-itens" type="hidden" name="telefone1_cliente" value="
                      <?php echo $item['sobrenome'];  ?>" >
                      <?php echo $item['sobrenome'];  ?> 
                  </td>
                  <td>
                     <input class="form-itens" type="hidden" name="placa_veiculo" value="
                      <?php echo $item['placa'];  ?>" >
                      <?php echo $item['placa'];  ?> 

                  </td>
                  <td>
                    <?php 
                       echo date('d/m/Y', strtotime($item['data_troca']));
                      ?>
                  </td>    

                  <td>
                    <?php 
                       echo date('d/m/Y', strtotime($item['proxima_troca']));
                      ?>
                  </td>
                  <td>
                    <input class="form-itens" type="hidden" name="telefone1_cliente" value="
                      <?php echo $item['telefone1'];  ?>" >
                      <?php echo $item['telefone1'];  ?>                      
                  </td> 

                  <td>
                    <input class="form-itens" type="hidden" name="status_filtro_oleo" value="
                      <?php echo $item['status_filtro_oleo'];  ?>" > 
                  </td>

                  <input class="form-itens" type="hidden" name="filtro_combustivel" value="
                      <?php echo $item['filtro_combustivel'];  ?>" >   
                      <!--retornar valores dos campos radios-->
                     
                      <input class="form-itens" type="hidden" name="status_filtro_combustivel" value="
                      <?php echo $item['status_filtro_combustivel'];  ?>" >  

                   <input class="form-itens" type="hidden" name="filtro_cabine" value="
                      <?php echo $item['filtro_cabine'];  ?>" >                      
                  
                   <input class="form-itens" type="hidden" name="filtro_ar" value="
                      <?php echo $item['filtro_ar'];  ?>" >                      
                  
                   <!--<input class="form-itens" type="hidden" name="filtro_oleo" value="
                      <?php echo $item['filtro_oleo'];  ?>" >  
                    -->  


                    

                   <input class="form-itens" type="hidden" name="tipo_oleo" value="
                      <?php echo $item['tipo_oleo'];  ?>" >                      
                  
                   <input class="form-itens" type="hidden" name="qtd_oleo" value="
                      <?php echo $item['qtd_oleo'];  ?>" >  

                    <input class="form-itens" type="hidden" name="km" value="
                      <?php echo $item['km'];  ?>" >                        
                  
                   <input class="form-itens" type="hidden" name="obs_troca" value="
                      <?php echo $item['obs_troca'];  ?>" >                      
                  
                  <!--agora os campos raio buuton-->
                  <input class="form-itens" type="hidden" name="status_filtro_combustivel" value="
                      <?php echo $item['status_filtro_combustivel'];  ?>" > 

                    <input class="form-itens" type="hidden" name="status_filtro_ar" value="
                      <?php echo $item['status_filtro_ar'];  ?>" >   

                    <input class="form-itens" type="hidden" name="status_filtro_oleo" value="
                      <?php echo $item['status_filtro_oleo'];  ?>" >  

                    <input class="form-itens" type="hidden" name="status_filtro_cabine" value="
                      <?php echo $item['status_filtro_cabine'];  ?>" > 
          
                  <!--<td data-toggle="tooltip"  title="Troca óleo Agora"><i class="glyphicon glyphicon-tint icones" onblur="validar(getElementById('cpf_cnpj').value)" >  </i></td>-->

                <!--Referencia o codigo para enviar para troca -->  
                <td align="">
                   <a class="btn btn-outline-light"  href="editar_troca.php?cod_veiculo=<?php echo $item['cod_veiculo']; ?>" data-toggle="tooltip"  title="Troca óleo" role="button"> <img src= "img/oleo-de-carro.png" width="25px" style="color:blue;"></a>
                </td>    


                
                 <td align="">
                   <a class="btn"  href="excluir_troca.php?cod_veiculo=<?php echo $item['cod_veiculo']; ?>" data-toggle="tooltip"  title="Excluir da lista"  role="button">  <i class="fas fa-trash-alt"  
                    style="color:red;"></i></a>
                </td>

                

                             
                <!--<td><input type="submit" name=""   value="Troca Óleo"  ></td>-->

                <!--<td><a href="cad-troca2.php?veiculo_cod_veiculo=<?php print $item['veiculo_cod_veiculo']; ?>">Avaliar</a></td>-->                 

                </tr>
              <?php } } ?>
            </tbody>

          </table>

          
      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Anterior</span>
            </a>
          </li>
          <?php 
          for ($q=0; $q <$paginas; $q++) {  
        ?>
                    
          <li class="page-item"><a class="page-link" href="trocas-avencer.php?p=<?php echo $q+1; ?>"><?php echo $q+1;  ?></a></li>
          <?php }?>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Próximo">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Próximo</span>
            </a>


          </li>
        </ul>
      </nav>


      </div>
    </div>
  </div>
  </div>


                                      </div>
                              </div>
                    </div>                      

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>



    </body>


    <div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



         <!--javascript para mascara  CPF/CNPJ-->
     <script type="text/javascript">
        var maskCpfOuCnpj = IMask(document.getElementById('cpf_cnpj'), {
    mask:[
        {
            mask: '000.000.000-00',
            maxLength: 11
        },
        {
            mask: '00.000.000/0000-00'
        }
    ]
});
</script>


</html>
