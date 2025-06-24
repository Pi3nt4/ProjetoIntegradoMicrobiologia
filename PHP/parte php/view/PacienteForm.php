<?php
// Verifica se a variável $paciente_para_editar foi definida e não é nula
$em_modo_edicao = isset($paciente_para_editar) && $paciente_para_editar !== null;

// Define os valores dos campos. Se estiver editando, usa os dados do paciente, senão, deixa em branco.
$id_valor = $em_modo_edicao ? $paciente_para_editar['id'] : '';
$nome_valor = $em_modo_edicao ? $paciente_para_editar['nome'] : '';
$cpf_valor = $em_modo_edicao ? $paciente_para_editar['cpf'] : '';
$data_nascimento_valor = $em_modo_edicao ? $paciente_para_editar['data_nascimento'] : '';
$email_valor = $em_modo_edicao ? $paciente_para_editar['email'] : '';
?>

<form action="controller/PacienteController.php" method="post">
    <?php if ($em_modo_edicao): ?>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id_valor); ?>">
    <?php endif; ?>

    <div class="mb-3">
        <label for="nome_paciente" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" name="nome" id="nome_paciente" value="<?php echo htmlspecialchars($nome_valor); ?>" required>
    </div>
    <div class="mb-3">
        <label for="cpf_paciente" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf_paciente" value="<?php echo htmlspecialchars($cpf_valor); ?>" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento_paciente" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento_paciente" value="<?php echo htmlspecialchars($data_nascimento_valor); ?>" required>
    </div>
    <div class="mb-3">
        <label for="email_paciente" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" id="email_paciente" value="<?php echo htmlspecialchars($email_valor); ?>">
    </div>
    
    <?php if ($em_modo_edicao): ?>
        <button type="submit" name="atualizar_paciente" class="btn btn-success">Atualizar</button>
    <?php else: ?>
        <button type="submit" name="salvar_paciente" class="btn btn-primary">Salvar</button>
    <?php endif; ?>
</form>