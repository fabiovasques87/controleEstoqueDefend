// function clicar(){
//     console.log('clicou aqui');
// }


var resultado = document.querySelector('#resultado');



$(document).ready(function(){

    $('#codProd').focusout(function(){

        $('form').submit(function(){

            var dados = $(this).serialize();//this faz referencia ao formulário

            $.ajax({


                url:"../../controller/processaLancamento.php",
                type:'POST',
                dataType: 'html',
                data:dados,
                success:function(data){
                    console.log(data);
                    $('#resultado').html(data);     //limpara a div e logo após recebe os dados
                },
                error: function(XMLHttpRequest, textStatus, errorThrown){
                    console.log(XMLHttpRequest);
                }


            });

            return false;

        });

        $('form').trigger('submit');    //funcao triger dispara o evento


    });





});









