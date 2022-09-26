//implantacao olho mágico na senha

var password = $('#password');
var olho= $("#olho");

olho.mousedown(function() {
    password.attr("type", "text");
});

olho.mouseup(function() {
    password.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
$( "#olho" ).mouseout(function() { 
  $("#password").attr("type", "password");
});



var bot = document.querySelector('#bot');
bot.addEventListener('click', function(e){
    e.preventDefault();
    console.log('clicou');

    //valida campos em branco


    let tcampo = $('#user').val().length;
    let tcampo2 = $('#password').val().length;

    if  (tcampo == 0){
        console.log('preencha o campo usuario')
        let aviso1 = document.querySelector('#alert-preencher-user');
        aviso1.innerHTML="preencha o campo usuario";
        document.querySelector('#alert-preencher-user').style.display="block";
            $('#user').focus();
       
    }
    if  (tcampo2 == 0){
        console.log('preencha o campo senha');
        console.log('preencha o campo usuario')
        let aviso2 = document.querySelector('#alert-preencher-password');
        aviso2.innerHTML="preencha o campo com a senha";
        document.querySelector('#alert-preencher-password').style.display="block";
            $('#password').focus();
    }else {
        $('#bot').on('click', function(){

            // let user =  $('#user').val();
            // let password = $('#password').val();


            $.ajax({

              type: 'POST',
              url:'../../controller/processa-login.php',		
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
                  window.location.href=('home.php');
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
                //   let sucesso = document.querySelector('#ModalSucesso');
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
                },"2000");
                                      
             
                 }
              
               }
              
            })

          })
  
      



   }
})



