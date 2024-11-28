<?php

namespace App\Models\DAO;

use App\Models\Entity\User;
use PDO;

/**
 * Classe UserDAO que herda de BaseDAO
 * Responsável por realizar operações CRUD na tabela 'users'
 */
class UserDAO extends BaseDAO
{
    /**
     * Método para criar um novo usuário no banco de dados
     * 
     * @param User $user - Objeto do tipo User contendo os dados do usuário
     * @return bool - Retorna true se a inserção foi bem-sucedida, caso contrário, false
     */
    public function create(User $user)
    {
        // SQL para inserir um novo registro na tabela 'users'
        $sql = "INSERT INTO users (id_pessoa, data_cadastro) VALUES (:id_pessoa, :data_cadastro)";
        
        // Parâmetros a serem vinculados na consulta SQL
        $params = [
            ':id_pessoa' => $user->getId_pessoa(),
            ':data_cadastro' => $user->getData_cadastro()
        ];
        
        // Chama o método insert da classe BaseDAO para executar a inserção
        return $this->insert($sql, $params);
    }

    /**
     * Método para ler um usuário do banco de dados pelo ID
     * 
     * @param int $id - ID do usuário a ser lido
     * @return array - Retorna um array associativo contendo os dados do usuário
     */
    public function read($id)
    {
        // SQL para selecionar um registro da tabela 'users' pelo ID
        $sql = "SELECT * FROM users WHERE id_user = :id_user";
        
        // Parâmetro a ser vinculado na consulta SQL
        $params = [':id_user' => $id];
        
        // Chama o método select da classe BaseDAO para executar a consulta
        return $this->select($sql, $params);
    }

    /**
     * Método para atualizar os dados de um usuário no banco de dados
     * 
     * @param User $user - Objeto do tipo User contendo os dados atualizados do usuário
     * @return bool - Retorna true se a atualização foi bem-sucedida, caso contrário, false
     */
    public function update(User $user)
    {
        // SQL para atualizar um registro na tabela 'users'
        $sql = "UPDATE users SET id_pessoa = :id_pessoa, data_cadastro = :data_cadastro WHERE id_user = :id_user";
        
        // Parâmetros a serem vinculados na consulta SQL
        $params = [
            ':id_pessoa' => $user->getId_pessoa(),
            ':data_cadastro' => $user->getData_cadastro(),
            ':id_user' => $user->getId_user()
        ];
        
        // Chama o método update da classe BaseDAO para executar a atualização
        return $this->update($sql, $params);
    }

    /**
     * Método para deletar um usuário do banco de dados pelo ID
     * 
     * @param int $id - ID do usuário a ser deletado
     * @return bool - Retorna true se a exclusão foi bem-sucedida, caso contrário, false
     */
    public function delete($id)
    {
        // SQL para deletar um registro da tabela 'users' pelo ID
        $sql = "DELETE FROM users WHERE id_user = :id_user";
        
        // Parâmetro a ser vinculado na consulta SQL
        $params = [':id_user' => $id];
        
        // Chama o método delete da classe BaseDAO para executar a exclusão
        return $this->delete($sql, $params);
    }
}