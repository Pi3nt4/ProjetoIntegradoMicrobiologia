<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- getbootstrap.com > include via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<style>
  body{
    background-color: lightcyan;
  }
  .bg{
    background-color: #F2FFFF;
  }
</style>
<body >
    <div class="container">
        <div class="row">
            <div class="col">
              <!-- Aqui vai o menu -->
              <?php
                //include "menu.php";
                require "menu.php";
            ?>
            </div>
            <div class="col-5 border bg p-5">
                <h1 class="display-5">Formulário PHP</h1>
                <form action="formulario.php" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data De nascimento</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telcontato" class="form-label">Telefone para contato</label>
                        <input type="number" name="telcontato" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nomemae" class="form-label">Nome da mãe</label>
                        <input type="text" name="nomemae" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="registro" class="form-label">Registro</label>
                        <input type="number" name="registro" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p>Gênero</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="F">
                            <label for="genero" class="form-check-label">Feminino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="M">
                            <label for="genero" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="O">
                            <label for="genero" class="form-check-label">Outro</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Periodo</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="periodo" value="noturno">
                            <label for="noturno" class="form-check-label">Noturno</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="matutino" value="matutino">
                            <label for="matutino" class="form-check-label">Matutino</label>
                        </div>
                        
                    </div>
                    <div class="mb-3">
                        <p>Urinálise</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="urina" value="Sim">
                            <label for="urina" class="form-check-label">Urinalise I</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="urina" value="nao">
                            <label for="genero" class="form-check-label">Nao</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="O">
                            <label for="urina" class="form-check-label"></label>
                            <input type="text" name="urina" id="outro" placeholder="outro">
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Toma algum medicamento continuo ? qual ?</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="medicamento" value="nao">
                            <label for="medicamento" class="form-check-label">Não</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="medicamento" value="sim">
                            <label for="medicamento" class="form-check-label">sim</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="medicamento" value="medicamentoSim">
                            <label for="medicamento" class="form-check-label"></label>
                            <input type="text" name="medicamentoSim" id="outro" placeholder="Nome do medicamento">
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Exames para qual laboratório?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bioq" value="bioquimica" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Bioquímica
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hemato" value="hematologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Hematologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="imuno" value="imunologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Imunologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="micro" value="microbiologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Microbiologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="parasito" value="parasitologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Parasitologia
                            </label>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar </button>
                </form>
            </div>
            <div class="col p-3 mt-2">
              
            </div>
        </div>
    </div>
</body>
</html>