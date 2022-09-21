$(function(){

    $('#botCad').bind('click',function(e){
        e.preventDefault();
        console.log( $( this ).serialize() );
        console.log('clicou em salvar');
        
        
            var tcampo = $('#statusMaterial').val();
    //     // var select = document.getElementById('nome_unidade');
    //     // // let tcampo2 =  $('#sobrenome_cliente').val().length;
    //     // // let tcampo3 = $('#cpf_cnpj').val().length;
    //     // // let tcampo4 = $('#telefone1_cliente').val().length;
    //     // console.log(text);
  
  
          if(tcampo == 'Selecionar'){
            console.log('preencha o campo status');
            // let load = document.querySelector('#load');
            // load.style.display="flex";
            let erro = document.querySelector('.erro');
            setTimeout(() => {
              erro.style.display="flex";
              erro.innerHTML= "preencha o campo status";
             erro.style.display="block";


              
            },"500")
            // setTimeout(()=>{
            //   load.style.display="none";
            // },"2000")

            // setTimeout(()=>{
            //   window.location.href=('editar_materiais.php');
            // },"2000");
          }else if (tcampo != 'Selecionar') {
            let erro = document.querySelector('.erro');
            erro.style.display="none";
            
          

                   $('#botCad').on('click', function(){ 
                    
                   $.ajax({
       
                     type: 'POST',
                     url:'../../update_materiais.php',		
                     //através do metodo abaixo é possivel enviar todo o formulario
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
                            window.location.href=('index.php');
                          },"6000");
      
        
                        $('#alert-troca-existe').modal('show');
                         console.log('nao encontrado');
                          
                        } 
                        
                        else  {
                        //alert("sucesso");
                         console.log(retorno);  
                         console.log('sucesso ao salva');  
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
                          window.location.href=('index.php');
                        },"4000");
                          
  
                         //$('#success-cadastro').modal('show');                     
                        // window.location.href="index.php";
                         
                      
                                              
                    
                        }
                     
                      }

                    
                     
                   })
  
                 })
               // }
             
  
  
  
                }
     
      })
     })
     
     