<?php

//Configuração de banco de dados
public function inserir(User $user){
    $sql = "INSERT INTO user (nome, email, telefone, endereco, cep, cpf) VALUES (:nome, :email, :telefone, :endereco, :cep, :cpf)";
}



?>