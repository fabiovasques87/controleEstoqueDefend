// function clickCad(){
//     console.log('clicou');
// }

var botaoCad = document.querySelector("#botCad");


$(function(){

    $('#botCad').bind('click',function(e){
        e.preventDefault();
        console.log( $( this ).serialize() );
        // console.log('clicou no botão');
        
        let tcampo = $('#codProd').val().length;
        let tcampo2 =  $('#nomeProd').val().length;

        if(tcampo == 0)
        {
        let aviso = document.querySelector('#alert-preencher-cod');
        aviso.innerHTML="preencher o campo código do produto";
        document.querySelector('#alert-preencher-cod').style.display="block";
            $('#codProd').focus();
        }

        if(tcampo2 == 0)
        {
             let aviso2 = document.querySelector('#alert-preencher-nome');
             aviso2.innerHTML="preencher o campo nome do produto";
             document.querySelector('#alert-preencher-nome').style.display="block";
                 $('#nomeProd').focus();
            
    
        }else {
            $('#botCad').on('click', function(){

                $.ajax({
    
                  type: 'POST',
                  url:'insert_produto323.php',		
                  //através do metodo abaixo é possivel enviar todo o formulario
                  // data: $('form').serialize(),
                  data: $('form').serialize(),
                  dataType: 'html',                  
                    }).done(function(resposta) {
                      console.log(resposta);
                  
                  }).fail(function(jqXHR, textStatus ) {
                      console.log("Request failed: " + textStatus);
                      let load = document.querySelector('#load');
                      load.style.display="block";
                      let erro = document.querySelector('.erro');
                      setTimeout(() => {
                      erro.style.display="block";
                     erro.innerHTML= "Algo deu errado";
                    },"1000")

                  }).always(function() {
                      //console.log("completou");
                      let sucesso = document.querySelector('.sucesso');
                      let load = document.querySelector('#load');
                      load.style.display="block";

                      setTimeout(() => {
                      sucesso.style.display="block";
                      sucesso.innerHTML="Sucesso";
                    },"1000")
                  });
                      
                   
                                          
                 
                     }
                  
             )}
                  
                })

              })
      
          



       
        
       

        

          
  
    
    