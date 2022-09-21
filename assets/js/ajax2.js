function teste(){
    console.log("clicou");
}

$('#formEscola').on('submit', function(event){
    event.preventDefault();
    var dados  = $(this).serialize(); //enviar todos os dados do formulário
    $.ajax({
        url:'class/pesquisa-class.php',
        type:'post',
        dataType: 'json', 
        data: dados,
        success: function(response){
            console.log(response);
        }

    });
});