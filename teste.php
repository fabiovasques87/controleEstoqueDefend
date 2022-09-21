<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<script type="text/javascript" src="assets/js/ajax.js"></script>
        <div id="Container">
            <h1>Agenda de Contatos utilizando AJAX</h1>
            <hr/>

            <h2>Pesquisar Contato:</h2>
            <div id="Pesquisar">
                Infome o nome:
                <input type="text" name="txtnome" id="txtnome"/>
                <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados();"/>
            </div>
            <hr/>

            <h2>Resultados da pesquisa:</h2>
            <div id="Resultado"></div>
            <hr>

        </div>

</body>
</html>