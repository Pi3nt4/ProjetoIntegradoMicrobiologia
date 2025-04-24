<?php
class Pessoa {
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $email;

    public function __construct($dados) {
        $this->nome = $dados['nome'];
        $this->cpf = $dados['cpf'];
        $this->dataNascimento = $dados['date'];
        $this->email = $dados['email'];
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Método para exibir os dados
    public function exibirDados() {
        echo "<h2>Dados da Pessoa</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Data de Nascimento: " . $this->dataNascimento . "<br>";
        echo "E-mail: " . $this->email . "<br>";
    }
}
?>
