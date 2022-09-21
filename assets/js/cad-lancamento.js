// function clickCad(){
//     console.log('clicou');
//     e.preventDefault();
// }

// var clickcad2 = document.querySelector('#clickcad2');
// clickcad2.addEventListener("click", escutar);

// function escutar (e){
//   e.preventDefault();
//   erroModal = document.querySelector('#exampleModalToggle2');
//   erroModal.style.display='flex';
//   console.log('clicou');

// }

var botaoCad = document.querySelector("#botCad");


$(function(){

    $('#botCad').bind('click',function(e){
        e.preventDefault();
        console.log( $( this ).serialize() );
         console.log('clicou no botão');
        
        // let tcampo = $('#codProd').val().length;
        // let tcampo1 =  $('#nomeProd').val().length;
        let tcampo2 =  $('#dataInicial-cadastro').val().length;
        let tcampo3 =  $('#datafinal-cadastro').val().length;
        let tcampo4 =  $('#pessoa_codPessoa').val().length;
        let tcampo5 =  $('#nomeAutorizado').val().length;
        let tcampo6 =  $('#nomeLiberacao').val().length;
        let tcampo7 =  $('#situacaoCadastro').val().length;
        


      
        if(tcampo2 == 0)  
        {
          let aviso2 = document.querySelector('#alert-preencher-dataInicial-cadastro');
          aviso2.innerHTML="preencher o campo com a data inicial";
          document.querySelector('#alert-preencher-dataInicial-cadastro').style.display="block";
              $('#dataInicial-cadastro').focus(); 
                     
        }
        if(tcampo3 == 0)
        {
          let aviso3 = document.querySelector('#alert-preencher-datafinal-cadastro');
          aviso3.innerHTML="preencher o campo a data final";
          document.querySelector('#alert-preencher-datafinal-cadastro').style.display="block";
              $('#datafinal-cadastro').focus();                 
        }
        if(tcampo4 == 0)
        {
          let aviso4 = document.querySelector('#alert-preencher-pessoa_codPessoa');
          aviso4.innerHTML="preencher o nome do responsável pelo material";
          document.querySelector('#alert-preencher-pessoa_codPessoa').style.display="block";
              $('#pessoa_codPessoa').focus();                 
        }
        if(tcampo5 == 0)
        {
          let aviso5 = document.querySelector('#alert-preencher-nomeAutorizado');
          aviso5.innerHTML="favor preencher quem autorizou essa entrega";
          document.querySelector('#alert-preencher-nomeAutorizado').style.display="block";
              $('#nomeAutorizado').focus();                 
        }
        if(tcampo6 == 0)
        {
          let aviso6 = document.querySelector('#alert-preencher-nomeLiberacao');
          aviso6.innerHTML="Favor preencher quem está liberando o material";
          document.querySelector('#alert-preencher-nomeAutorizado').style.display="block";
              $('#nomeLiberacao').focus();                 
        }
        if(tcampo7 == 0)
        {
          let aviso7 = document.querySelector('#alert-preencher-situacaoCadastro');
          aviso7.innerHTML="Favor preencher a situacção da entrega";
          document.querySelector('#alert-preencher-situacaoCadastro').style.display="block";
              $('#situacaoCadastro').focus();                 
        }
        else {
            $('#botCad').on('click', function(){

                $.ajax({
    
                  type: 'POST',
                  url:'insert_lancamento.php',		
                  //através do metodo abaixo é possivel enviar todo o formulario
                  // data: $('form').serialize(),
                  data: $('form').serialize(),
                  dataType: 'json',                  
                  success: function (retorno){
                    console.log(retorno);   
                    //alert('erro ao cadastrar');                   
                    
                      if(retorno == "erro")
                     {
                      console.log(retorno);
                      //alert("erro ao cadastrar");
                      console.log('erro ao cadastrar');
  
                      //$('#erro-cadastro').modal('show');
                      //console.log('nao encontrado');

                      let load = document.querySelector('#load');
                      load.style.display="flex";
                      let erro = document.querySelector('.erro');
                      setTimeout(() => {
                        erro.style.display="flex";
                        erro.innerHTML= "";
                        erroModal = document.querySelector('#ModalErro');
                        erroModal.style.display='flex';

                     
                    },"3000")
                    setTimeout(()=>{
                      load.style.display="none";
                    },"2000")

                    setTimeout(()=>{
                      window.location.href=('lancamento.php');
                    },"6000");
                                 
                     } 
                     
                     else  {
                     //alert("sucesso");
                      console.log(retorno);    
                      //alert('sucesso ao salvar');
                      //$('#success-cadastro').modal('show');                     
                      //window.location.href="cad-veiculo.php";
                      console.log('sucesso');
                      let load = document.querySelector('#load');
                      load.style.display="flex";
                      let sucesso = document.querySelector('#ModalSucesso');
                      //let iconeSucesso = document.querySelector('.iconeSucesso');
                      setTimeout(() => {
                      sucesso.style.display="flex";
                      //iconeSucesso.style.display="flex";
                      //sucesso.innerHTML= "SUCESSO";
                    },"1000")
                    setTimeout(()=>{
                      load.style.display="none";
                    },"2000")
                     
                    setTimeout(()=>{
                      window.location.href=('lancamento.php');
                    },"4000");
                                          
                 
                     }
                  
                   }
                  
                })

              })
      
          



       }
  
  })
  })
  

  /*Funcao abaixo habilita o campo (empresa responsavel) caso sejá escolhido no 
  campo anterior chamado 'situacao' a opção de "encaminhado para concerto" */
  
  var select = document.querySelector('#situacaoCadastro');
  var campoConcerto = document.querySelector('#pessoa_codPessoa');
  var labelConcerto = document.querySelector('#empresaConcerto');
  var campoHiddenEmpresa = document.querySelector('#campoHiddenEmpresa');
  var situacao = document.querySelector('.situacao');

  select.addEventListener("click",function(){
    
    

    if (select.value==='Encaminhado para concerto'){
      // console.log('acertou');

    situacao.setAttribute("class","col-md-4");  //campo situacao recebe a classe md-4 para ficar menor e caber o outro do lado
    // select.setAttribute("class","col-md-4");
    campoConcerto.style.display="block";
    labelConcerto.style.display="block";
    campoHiddenEmpresa.style.display="none";
    // campoHiddenEmpresa.removeAttribute(name);
    // document.querySelector('#campoHiddenEmpresa').setAttribute(name, teste);
    // campoHiddenEmpresa.name='teste';
    document.querySelector('#campoHiddenEmpresa').name='teste'; //troca o name do input para que permita ser enviado o name do input selecionado

    }else if(select.value !== 'Encaminhado para concerto'){
      campoConcerto.style.display="none";
      labelConcerto.style.display="none";
      situacao.setAttribute("class","col-md-8");  //campo situacao recebe a classe md-8 para ficar maior
      campoHiddenEmpresa.style.display="block";
      // campoHiddenEmpresa.setAttribute("name","empresaServico_codEmpresa");
      // campoConcerto.name='empresaServico_codEmpresa';
      document.querySelector('#pessoa_codPessoa').name='teste1'; //troca o name do input para que permita ser enviado o name do input selecionado

  
    }

    
    // console.log(select.value);

  })

