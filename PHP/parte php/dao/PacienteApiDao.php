<?php
class PacienteApiDao {
    // URL base da nossa API Node.js
    private $apiUrl = 'http://localhost:3000/api';

    /**
     * Busca todos os pacientes da API.
     * @return array Retorna uma lista de pacientes ou um array vazio em caso de erro.
     */
    public function read() {
        try {
            $endpoint = $this->apiUrl . '/pacientes';
            $jsonResponse = @file_get_contents($endpoint);

            if ($jsonResponse === false) {
                error_log("Não foi possível conectar à API em " . $endpoint);
                return [];
            }
            
            $pacientesArray = json_decode($jsonResponse, true);
            return is_array($pacientesArray) ? $pacientesArray : [];

        } catch (Exception $e) {
            error_log('Erro ao buscar pacientes da API: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * (NOVO) Busca um único paciente pelo seu ID na API.
     * @param int $id O ID do paciente.
     * @return array|null Retorna os dados do paciente ou null se não for encontrado.
     */
    public function buscarPorId($id) {
        $endpoint = $this->apiUrl . '/pacientes/' . $id;
        $response = @file_get_contents($endpoint);

        if ($response === false) {
            return null;
        }

        return json_decode($response, true);
    }

    /**
     * Cria um novo paciente fazendo uma chamada POST para a API.
     * @param array $dadosPaciente Os dados do formulário (ex: $_POST).
     * @return bool True se foi criado com sucesso, false caso contrário.
     */
    public function criar($dadosPaciente) {
        $endpoint = $this->apiUrl . '/pacientes';

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dadosPaciente));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen(json_encode($dadosPaciente))
        ]);

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // A API retorna 201 (Created) em caso de sucesso
        return $http_code == 201;
    }

    /**
     * (NOVO) Atualiza um paciente existente fazendo uma chamada PUT para a API.
     * @param int $id O ID do paciente a ser atualizado.
     * @param array $dadosPaciente Os dados do formulário a serem atualizados.
     * @return bool True se foi atualizado com sucesso, false caso contrário.
     */
    public function atualizar($id, $dadosPaciente) {
        $endpoint = $this->apiUrl . '/pacientes/' . $id;

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dadosPaciente));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen(json_encode($dadosPaciente))
        ]);

        curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // A API retorna 200 (OK) em caso de sucesso na atualização
        return $http_code == 200;
    }
}
?>