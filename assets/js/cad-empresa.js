
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
        // console.log('clicou no botão');
        
        let tcampo = $('#nomeEmpresa').val().length;
        let tcampo1 =  $('#cidadeEmpresa').val().length;
        let tcampo2 =  $('#telEmpresa').val().length;
        let tcampo3 =  $('#descEmpresa').val().length;


        if(tcampo == 0)
        {
        let aviso = document.querySelector('#alert-preencher-nomeEmpresa');
        aviso.innerHTML="preencher o campo nome da empresa";
        document.querySelector('#alert-preencher-nomeEmpresa').style.display="block";
            //$('#nomeEmpresa').focus();
        }

        if(tcampo1 == 0)
        {
             let aviso1 = document.querySelector('#alert-preencher-cidadeEmpresa');
             aviso1.innerHTML="preencher o campo cidade da empresa";
             document.querySelector('#alert-preencher-cidadeEmpresa').style.display="block";
                // $('#cidadeEmpresa').focus();                
        }
        if(tcampo2 == 0)
        {
          let aviso2 = document.querySelector('#alert-preencher-telEmpresa');
          aviso2.innerHTML="preencher o campo com o telefone da empresa";
          document.querySelector('#alert-preencher-telEmpresa').style.display="block";
             // $('#telEmpresa').focus(); 
                     
        }
        if(tcampo3 == 0)
        {
          let aviso3 = document.querySelector('#alert-preencher-descEmpresa');
          aviso3.innerHTML="preencher o campo descrição da empresa";
          document.querySelector('#alert-preencher-descEmpresa').style.display="block";
              //$('#descEmpresa').focus();                 
        }else {
            $('#botCad').on('click', function(){

                $.ajax({
    
                  type: 'POST',
                  url:'insert_empresa.php',		
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
                      window.location.href=('cad-empresa.php');
                    },"6000");
                                 
                     } 
                     
                     else  {
                     //alert("sucesso");
                      console.log(retorno);    

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
                      window.location.href=('cad-empresa.php');
                    },"4000");
                                          
                 
                     }
                  
                   }
                  
                })

              })
      
          



       }
  
  })
  })
  
  
  