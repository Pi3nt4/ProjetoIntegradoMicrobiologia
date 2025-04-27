<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home - Sistema de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #3498db;
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 15px 0;
            flex-wrap: wrap;
        }

        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s;
            margin: 5px 10px;
            border-radius: 5px;
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        .content {
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }


    </style>
</head>
<body>

<div class="navbar">
    <a href="cadastrar_paciente.php">Cadastrar Paciente</a>
    <a href="cadastrar_adm.php">Cadastrar Administrador</a>
    <a href="cadastrar_aluno.php">Cadastrar Aluno</a>
    <a href="cadastrar_exame.php">Cadastrar Exame</a>
    <a href="pesquisar_resultados.php">Pesquisar Resultados</a>
    <a href="login_adm.php">Login Administrador</a>
    <a href="login_aluno.php">Login Aluno</a>
</div>

<div class="content">
    <h1>Bem-vindo ao Sistema de Cadastro de Pacientes e Exames</h1>
    <p>Use o menu acima para navegar entre as funcionalidades.</p>
</div>


</body>
</html>
