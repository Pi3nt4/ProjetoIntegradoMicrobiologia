<?php
require_once 'Pessoa.php';

class Paciente extends Pessoa {
    private $telefone;
    private $nomeMae;
    private $registro;
    private $genero;
    private $periodo;
    private $urina;
    private $medicamento;
    private $medicamentoNome;
    private $exames; // array

    public function __construct($nome, $cpf, $dataNascimento, $email, $telefone, $nomeMae, $registro, $genero, $periodo, $urina, $medicamento, $medicamentoNome, $exames) {
        parent::__construct($nome, $cpf, $dataNascimento, $email);
        $this->telefone = $telefone;
        $this->nomeMae = $nomeMae;
        $this->registro = $registro;
        $this->genero = $genero;
        $this->periodo = $periodo;
        $this->urina = $urina;
        $this->medicamento = $medicamento;
        $this->medicamentoNome = $medicamentoNome;
        $this->exames = $exames;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getNomeMae() {
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae) {
        $this->nomeMae = $nomeMae;
    }

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registro) {
        $this->registro = $registro;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function getUrina() {
        return $this->urina;
    }

    public function setUrina($urina) {
        $this->urina = $urina;
    }

    public function getMedicamento() {
        return $this->medicamento;
    }

    public function setMedicamento($medicamento) {
        $this->medicamento = $medicamento;
    }

    public function getMedicamentoNome() {
        return $this->medicamentoNome;
    }

    public function setMedicamentoNome($medicamentoNome) {
        $this->medicamentoNome = $medicamentoNome;
    }

    public function getExames() {
        return $this->exames;
    }

    public function setExames($exames) {
        $this->exames = $exames;
    }
}
?>
