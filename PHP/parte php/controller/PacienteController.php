<?php
require_once __DIR__ . '/../dao/PacienteApiDao.php';

// Verifica se o formulário de salvar paciente foi submetido
if (isset($_POST['salvar_paciente'])) {
    $pacienteDao = new PacienteApiDao();

    $dadosNovoPaciente = [
        'nome' => $_POST['nome'],
        'cpf' => $_POST['cpf'],
        'dataNascimento' => $_POST['data_nascimento'],
        'email' => $_POST['email']
    ];

    $sucesso = $pacienteDao->criar($dadosNovoPaciente);

    if ($sucesso) {
        header("Location: ../pacientes.php?msg=cadastrado_sucesso");
    } else {
       header("Location: ../pacientes.php?msg=erro_cadastrar");
    }
    exit();

// Lógica para atualizar um paciente existente
} elseif (isset($_POST['atualizar_paciente'])) {
    $pacienteDao = new PacienteApiDao();
    $id = (int)$_POST['id'];

    $dadosAtualizados = [
        'nome' => $_POST['nome'],
        'cpf' => $_POST['cpf'],
        'data_nascimento' => $_POST['data_nascimento'],
        'email' => $_POST['email']
    ];

    $sucesso = $pacienteDao->atualizar($id, $dadosAtualizados);

    if ($sucesso) {
        header("Location: ../pacientes.php?msg=atualizado_sucesso");
    } else {
        header("Location: ../pacientes.php?msg=erro_atualizar");
    }
    exit();
} elseif (isset($_GET['acao']) && $_GET['acao'] == 'excluir' && isset($_GET['id'])) {
    $pacienteDao = new PacienteApiDao();
    $id = (int)$_GET['id'];

    $sucesso = $pacienteDao->excluir($id);

    if ($sucesso) {
        header("Location: ../pacientes.php?msg=excluido_sucesso");
    } else {
        header("Location: ../pacientes.php?msg=erro_excluir");
    }
    exit();
}


function listarPacientesApi() {
    $pacienteApiDao = new PacienteApiDao();
    $listaDePacientes = $pacienteApiDao->read();

    if (empty($listaDePacientes)) {
        echo "<tr><td colspan='5' class='text-center'>Nenhum paciente retornado pela API. Verifique se a API está rodando.</td></tr>";
        return;
    }

    foreach ($listaDePacientes as $paciente) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($paciente['id']) . "</td>";
        echo "<td>" . htmlspecialchars($paciente['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($paciente['cpf']) . "</td>";
        echo "<td>
                <a href='#' class='btn btn-sm btn-info'>Ver Exames</a> 
                <a href='pacientes.php?acao=editar&id=" . htmlspecialchars($paciente['id']) . "' class='btn btn-sm btn-warning'>Editar</a> 
                <a href='controller/PacienteController.php?acao=excluir&id=" . htmlspecialchars($paciente['id']) . "' 
                   class='btn btn-sm btn-danger' 
                   onclick='return confirm(\"Tem certeza que deseja excluir este paciente? Todos os seus exames também serão perdidos.\");'>Excluir</a> 
              </td>";
        echo "</tr>";
    }
}
?>