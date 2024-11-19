<?php

//Configuração de banco de dados
public function inserir(Empresa $empresa){
    $sql = "INSERT INTO empresa (nome, email, telefone, endereco, cep, cnpj) VALUES (:nome, :email, :telefone, :endereco, :cep, :cnpj)";
}






?>