<?php

//Configuração de banco de dados 
public function inserir(Pessoa $pessoa){
    $sql = "INSERT INTO pessoa (nome, email, telefone, endereco, cep, cpf) VALUES (:nome, :email, :telefone, :endereco, :cep, :cpf)";
}







?>