<?php
require_once "Pessoa.php";

class Administrador extends Pessoa {
    private $senha;

    public function __construct($nome, $cpf, $email, $senha) {
        parent::__construct($nome, $cpf, $email);
        $this->senha = $senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }
}
?>