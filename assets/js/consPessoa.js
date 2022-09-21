function clicar(){
    console.log('clicou aqui');
}





$(document).ready(function(){

    $('#campo').keyup(function(){

        $('form').submit(function(){

            var dados = $(this).serialize();//this faz referencia ao formulário

            $.ajax({


                url:"../../controller/processaPessoa.php",
                type:'POST',
                dataType: 'html',
                data:dados,
                success:function(data){
                    console.log(data);
                    $('#resultado').empty().html(data);     //limpara a div e logo após recer os dados
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









