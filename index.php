<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Teste login</title>
    <style>
        .container{
            height: 100%;
            width: 25%;
            padding: 25px;
        }
        .display-2{
            padding-bottom: 20px;
        }
        .form-control::-webkit-input-placeholder{
            opacity: 0.6;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success display-2"> Login </h1>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="alert alert-danger">
            <strong>ERRO:</strong> Usuário ou senha inválidos.
        </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>
        <form action="login.php" method="POST">
            <div class="form-group">
              <label for="user">Usuário:</label>
              <input name="usuario" type="text" class="form-control" placeholder="Seu usuário" autofocus="">
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input name="senha" type="password" class="form-control" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalCadastro">Cadastrar</button>
        </form>
        <!-- MODAL CADASTRAR -->
        <div class="modal fade" id="myModalCadastro" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastro</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/control.php">
                            <div class="form-group">
                              <label for="email">Usuário:</label>
                              <input type="text" class="form-control" id="user">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Senha:</label>
                              <input type="password" class="form-control" id="pwd">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
                    </div>
                </div>
            </div>
        </div> <!-- Fim do Modal Cadastrar -->
    </div>
 
</body>
</html>