<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style3.css">
    <!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<!-- link para icones -->
<script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>


        <!-- <img src="assets/images/carro.png" id="imgCarro" width="200px" height="80px"> -->
            <div class="form--login">
                    <form id="login">

                    <div class="login--login">Login</div>
                        <label for="">usuario</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Insira seu usuario">
                        <label for="">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Insira sua senha">

                        <span><img src="assets/images/olho.png" alt="" id="olho"></span>

                        <button class="btn btn-success" id="bot">Entrar</button>

                        <div class="alerta" id="alert-preencher-user"></div>
                        <div class="alerta" id="alert-preencher-password"></div>


                    </form>

                    <div class="status">

                        <div class="spinner-border" id="load" role="status">
                        <div class="visually-hidden">Loading...</div>
                        </div>
                        <div class="erro"></div>
                        <div class="sucesso"></div>
                    </div>
            </div>
    


           

    <!--Erro ao cadastrar -->

<div class="modal" id="ModalErro" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Algo deu Errado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="tituloModalError"><i class="fa-solid fa-triangle-exclamation"></i>Usuário ou senha incorretos</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>



<script src="assets/js/home.js"></script>
</body>
</html>