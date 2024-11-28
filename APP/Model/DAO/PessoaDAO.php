<?php

class PessoaDAO extends BaseDAO
{
    /**
     * Método para criar uma nova pessoa no banco de dados
     * 
     * @param Pessoa $pessoa - Objeto do tipo Pessoa contendo os dados da pessoa
     * @return bool - Retorna true se a inserção foi bem-sucedida, caso contrário, false
     */
    public function inserir(Pessoa $pessoa)
    {
        // SQL para inserir um novo registro na tabela 'pessoa'
        $sql = "INSERT INTO pessoa (nome, email, telefone, endereco, cep, cpf) VALUES (:nome, :email, :telefone, :endereco, :cep, :cpf)";
        
        // Parâmetros a serem vinculados na consulta SQL
        $params = [
            ':nome' => $pessoa->getNome(),
            ':email' => $pessoa->getEmail(),
            ':telefone' => $pessoa->getTelefone(),
            ':endereco' => $pessoa->getEndereco(),
            ':cep' => $pessoa->getCep(),
            ':cpf' => $pessoa->getCpf()
        ];
        
        // Chama o método insert da classe BaseDAO para executar a inserção
        return $this->insert($sql, $params);
    }

    /**
     * Método para ler uma pessoa do banco de dados pelo ID
     * 
     * @param int $id - ID da pessoa a ser lida
     * @return array - Retorna um array associativo contendo os dados da pessoa
     */
    public function read($id)
    {
        // SQL para selecionar um registro da tabela 'pessoa' pelo ID
        $sql = "SELECT * FROM pessoa WHERE id_pessoa = :id_pessoa";
        
        // Parâmetro a ser vinculado na consulta SQL
        $params = [':id_pessoa' => $id];
        
        // Chama o método select da classe BaseDAO para executar a consulta
        return $this->select($sql, $params);
    }

    /**
     * Método para atualizar os dados de uma pessoa no banco de dados
     * 
     * @param Pessoa $pessoa - Objeto do tipo Pessoa contendo os dados atualizados da pessoa
     * @return bool - Retorna true se a atualização foi bem-sucedida, caso contrário, false
     */
    public function update(Pessoa $pessoa)
    {
        // SQL para atualizar um registro na tabela 'pessoa'
        $sql = "UPDATE pessoa SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, cep = :cep, cpf = :cpf WHERE id_pessoa = :id_pessoa";
        
        // Parâmetros a serem vinculados na consulta SQL
        $params = [
            ':nome' => $pessoa->getNome(),
            ':email' => $pessoa->getEmail(),
            ':telefone' => $pessoa->getTelefone(),
            ':endereco' => $pessoa->getEndereco(),
            ':cep' => $pessoa->getCep(),
            ':cpf' => $pessoa->getCpf(),
            ':id_pessoa' => $pessoa->getId_pessoa()
        ];
        
        // Chama o método update da classe BaseDAO para executar a atualização
        return $this->update($sql, $params);
    }

    /**
     * Método para deletar uma pessoa do banco de dados pelo ID
     * 
     * @param int $id - ID da pessoa a ser deletada
     * @return bool - Retorna true se a exclusão foi bem-sucedida, caso contrário, false
     */
    public function delete($id)
    {
        // SQL para deletar um registro da tabela 'pessoa' pelo ID
        $sql = "DELETE FROM pessoa WHERE id_pessoa = :id_pessoa";
        
        // Parâmetro a ser vinculado na consulta SQL
        $params = [':id_pessoa' => $id];
        
        // Chama o método delete da classe BaseDAO para executar a exclusão
        return $this->delete($sql, $params);
    }
}







?>