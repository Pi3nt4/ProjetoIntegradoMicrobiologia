// 1. Importar os módulos necessários
const express = require('express');
const bodyParser = require('body-parser');
// const mysql = require('mysql2'); // Comentado por enquanto

// 2. Inicializar o aplicativo Express
const app = express();
const PORT = process.env.PORT || 3000;

// 3. Configurar o Body Parser
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

/*
// ----- SEÇÃO DE CONFIGURAÇÃO DO BANCO DE DADOS (Para Entrega 4) -----
// const dbPool = mysql.createPool({ ... }).promise();
// async function testarConexaoDB() { ... }
// testarConexaoDB();
// ----- FIM DA SEÇÃO DE CONFIGURAÇÃO DO BANCO DE DADOS -----
*/

// 4. Rota Inicial da API
app.get('/', (req, res) => {
    res.status(200).json({ message: 'API do Sistema de Laboratório de Microbiologia (Simples)' });
});

// --- ROTAS CRUD PARA PACIENTES ---

// ROTA 1: Listar todos os pacientes (READ all)
app.get('/api/pacientes', (req, res) => {
    console.log('Recebida requisição GET em /api/pacientes para listar todos');
    // TODO: Na Entrega 4, buscar dados reais do banco de dados.
    res.status(200).json({ message: 'Listagem de todos os pacientes (simulação)' });
});

// ROTA 2: Buscar um paciente específico pelo ID (READ by ID)
app.get('/api/pacientes/:id', (req, res) => {
    const pacienteId = req.params.id; 
    console.log(`--- Requisição GET Recebida em /api/pacientes/${pacienteId} ---`);
    console.log('ID do Paciente para buscar:', pacienteId);
    // TODO: Na Entrega 4, buscar o paciente com este ID no banco.
    res.status(200).send(`Dados simulados do paciente com ID ${pacienteId} (API Node.js)`);
});

// ROTA 3: Cadastrar um novo paciente (CREATE)
app.post('/api/pacientes', (req, res) => {
    const { nome, cpf, dataNascimento, email } = req.body; 
    console.log('--- Requisição POST Recebida em /api/pacientes ---');
    console.log('Dados Recebidos para Cadastro:', { nome, cpf, dataNascimento, email });
    // TODO: Na Entrega 4, inserir estes dados no banco.
    res.status(201).send('Paciente cadastrado com sucesso (simulação via API)'); 
});

// ROTA 4: Atualizar um paciente existente (UPDATE)
app.put('/api/pacientes/:id', (req, res) => {
    const pacienteId = req.params.id;
    const { nome, cpf, dataNascimento, email } = req.body; // Dados para atualização
    console.log(`--- Requisição PUT Recebida em /api/pacientes/${pacienteId} ---`);
    console.log('ID do Paciente para atualizar:', pacienteId);
    console.log('Dados para atualização:', { nome, cpf, dataNascimento, email });
    // TODO: Na Entrega 4, atualizar o paciente com este ID no banco.
    res.status(200).send(`Paciente com ID ${pacienteId} atualizado com sucesso (simulação via API)`);
});

// ROTA 5: Excluir um paciente (DELETE)
app.delete('/api/pacientes/:id', (req, res) => {
    const pacienteId = req.params.id;
    console.log(`--- Requisição DELETE Recebida em /api/pacientes/${pacienteId} ---`);
    console.log('ID do Paciente para excluir:', pacienteId);
    // TODO: Na Entrega 4, excluir o paciente com este ID do banco.
    res.status(200).send(`Paciente com ID ${pacienteId} excluído com sucesso (simulação via API)`);
});

// 5. Iniciar o Servidor
app.listen(PORT, () => {
    console.log(`Servidor da API (simples) rodando na porta ${PORT}`);
    console.log(`Acesse em: http://localhost:${PORT}`);
});