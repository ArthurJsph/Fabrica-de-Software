<?php

//Configuração de banco de dados
function inserir(Empresa $empresa){
    $sql = "INSERT INTO empresa (nome, email, telefone, endereco, cep, cnpj) VALUES (:nome, :email, :telefone, :endereco, :cep, :cnpj)";
}






?>