<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Exame</title>
</head>
<body>

<h1>Cadastro de Exame</h1>

<form action="salvar_exame.php" method="post">
    <label>Nome do Exame:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao" required></textarea><br><br>

    <label>Tipo de Material:</label><br>
    <input type="text" name="tipo_material" required><br><br>

    <label>Data de Coleta:</label><br>
    <input type="date" name="data_coleta" required><br><br>

    <label>Status:</label><br>
    <select name="status" required>
        <option value="Pendente">Pendente</option>
        <option value="Concluído">Concluído</option>
        <option value="Cancelado">Cancelado</option>
    </select><br><br>

    <input type="submit" value="Cadastrar Exame">
</form>

</body>
</html>
