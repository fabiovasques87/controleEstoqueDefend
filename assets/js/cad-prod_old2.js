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
                  url:'insert_produto.php',		
                  //através do metodo abaixo é possivel enviar todo o formulario
                  // data: $('form').serialize(),
                  data: $('form').serialize(),
                  dataType: 'html',                  
                  })
                 
                  .done(function (data) { 
                    let sucesso = document.querySelector('.sucesso');
                    let load = document.querySelector('#load');
                    load.style.display="flex";

                    setTimeout(() => {
                    sucesso.style.display="block";
                    sucesso.innerHTML="SUCESSO";
                  },"1000")
                  setTimeout(()=>{
                    load.style.display="none";
                  },"2000")
                  //window.location.href('index.php');

                })
                  .fail(function (jqXHR, textStatus, errorThrown) { 
                    let load = document.querySelector('#load');
                    load.style.display="flex";
                    let erro = document.querySelector('.erro');
                    setTimeout(() => {
                    erro.style.display="block";
                   erro.innerHTML= "NÃO ENCONTRADO";
                  },"1000")
                  setTimeout(()=>{
                    load.style.display="none";
                  },"2000")



                });
                                        
                 
                     }
                  
             )}
                  
                })

                   
                  
                  
                

                //  .ajaxError(
                //    function(e, x, settings, exception) {
                //       var message;
                //       var statusErrorMap = {
                //           '400' : "Server understood the request, but request content was invalid.",
                //           '401' : "Unauthorized access.",
                //           '403' : "Forbidden resource can't be accessed.",
                //           '500' : "Internal server error.",
                //           '503' : "Service unavailable."
                //       };

                //       if (x.status) {
                //         message =statusErrorMap[x.status];
                //                         if(!message){
                //                               message="Unknown Error \n.";
                //                           }                                      
                //      }else if(exception=='parsererror'){
                //          message="Error.\nParsing JSON Request failed.";
                //          console.log('1');
                //     }else if(exception=='timeout'){
                //          message="Request Time out.";
                //          console.log('2');
                //      }else if(exception=='abort'){
                //          message="Request was aborted by the server";
                //          console.log('3');
                //      }else {
                //         message="Unknown Error \n.";
                //         console.log('4');
                //      }
                //      $(this).css("display","inline");
                //      $(this).html(message);
                //    });


             

     })
      
          



       
        
       

        

          
  
    
    