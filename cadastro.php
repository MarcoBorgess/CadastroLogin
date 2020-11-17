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
        <h1 class="text-center text-success display-2"> Cadastro </h1>
        
        <?php
            if(isset($_SESSION['status_cadastro'])):
        ?>
        <div class="alert alert-success">
            <strong>Cadastro efetuado!</strong>
            <p>Faça login com seu usuário e senha <a href="login.php">aqui</a></p>  
        </div>
        <?php
            endif;
            unset($_SESSION['status_cadastro']);
        ?>
        
        <?php
            if(isset($_SESSION['usuario_existe'])):
        ?>
        <div class="alert alert-danger">
            <strong>ERRO:</strong> Usuário está em uso.
        </div>
        <?php
            endif;
            unset($_SESSION['usuario_existe']);
        ?>
        <form action="cadastrar.php" method="POST">
            <div class="form-group">
              <label for="user">Usuário:</label>
              <input name="usuario" type="text" class="form-control" placeholder="Seu usuário" autofocus="">
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input name="senha" type="password" class="form-control" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            <a href="login.php">
                <button type="button" class="btn btn-info" >Logar</button>
            </a>
        </form>
    </div>
</body>
</html>