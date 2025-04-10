<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            max-width: 500px;
            border-radius: 10px;
            box-shadow:  0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f2ffff;
        }
        body{
            background-color:lightcyan;

        }
    </style>
    <title>cadastro de formulario</title>
  </head>
  <body> 
  <div class="col">
              <!-- Aqui vai o menu -->
            <?php
                //include "menu.php";
                require "menu.php";
            ?>
            </div>
    <div class="container mt-5 p-5 border ">
    <form action="">
   
        <h1 class="text-center">Cadastro de ADM</h1>
        <form action="">
            <div class="text-center">
            <div class="mb-3">
            <label for="">Informe o seu nome: </label><br>
            <input type="text" name="nome" id="nome">
        
        </div>
        <div class="mb-3">
            <label for="">Informe o seu email: </label><br>
            <input type="email" name="email" id="email">
        
        </div>
        <div class="mb-3">
            <label for="">Informe o seu cpf: </label><br>
            <input type="text" name="cpf" id="cpf">
        
        </div>
        <div class="mb-3 ">
            <label for="">Informe o seu senha: </label><br>
            <input type="password" name="senha" id="senha">
        
        </div>
        <button type="submit" class=" btn btn-success ">Cadastrar Usuario</button>
    </div>
    
        </form>
        

    </div>
        

    
  </body>
</html>