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
        
        let tcampo = $('#nomePessoa').val().length;
        let tcampo2 =  $('#cpf_cnpj').val().length;
        let tcampo3 =  $('#telefonePessoa').val().length;


        if(tcampo == 0)
        {
        let aviso = document.querySelector('#alert-preencher-nomePessoa');
        aviso.innerHTML="preencher o campo nome da pessoa";
        document.querySelector('#alert-preencher-nomePessoa').style.display="block";
            $('#nomePessoa').focus();
        }

        if(tcampo2 == 0)
        {
             let aviso2 = document.querySelector('#alert-preencher-cpfPessoa');
             aviso2.innerHTML="preencher o campo CPF";
             document.querySelector('#alert-preencher-cpfPessoa').style.display="block";
                 $('#cpf_cnpj').focus();
            
    
        }
        if(tcampo3 == 0)
        {
             let aviso3 = document.querySelector('#alert-preencher-telefonePessoa');
             aviso3.innerHTML="preencher o campo telefone";
             document.querySelector('#alert-preencher-telefonePessoa').style.display="block";
                 $('#cpfPessoa').focus();
            
    
        }else {
            $('#botCad').on('click', function(){

                $.ajax({
    
                  type: 'POST',
                  url:'insert_pessoa.php',		
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
                      window.location.href=('cad-pessoa.php');
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
                      window.location.href=('cad-pessoa.php');
                    },"4000");
                                          
                 
                     }
                  
                   }
                  
                })

              })
      
          



       }
  
  })
  })
  
  
  //mascara para cpf:

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