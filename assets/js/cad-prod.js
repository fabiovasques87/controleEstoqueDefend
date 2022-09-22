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
        // console.log('clicou no botão');
        
        let tcampo = $('#codProd').val().length;
        let tcampo2 =  $('#desProd').val().length;

        if(tcampo == 0)
        {
        let aviso = document.querySelector('#alert-preencher-cod');
        aviso.innerHTML="preencher o campo código do produto";
        document.querySelector('#alert-preencher-cod').style.display="block";
            $('#codProd').focus();
        }

        if(tcampo2 == 0)
        {
             let aviso2 = document.querySelector('#alert-preencher-descProd');
             aviso2.innerHTML="preencher o campo Descrição do produto";
             document.querySelector('#alert-preencher-descProd').style.display="block";
                 $('#descProd').focus();
            
    
        }else {
            $('#botCad').on('click', function(){

                $.ajax({
    
                  type: 'POST',
                  url:'insert_produto.php',		
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
                      window.location.href=('cad-prod.php');
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
                      window.location.href=('cad-prod.php');
                    },"4000");
                                          
                 
                     }
                  
                   }
                  
                })

              })
      
          



       }
  
  })
  })
  
  
  