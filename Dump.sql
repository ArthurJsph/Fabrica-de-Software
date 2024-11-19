create database fabrica;
use fabrica;
create table pessoa(
	id_pessoa int primary key auto_increment,
    nome varchar(100) not null,
    cpf varchar(14) not null,
    email varchar(30) not null,
    telefone varchar(15) not null,
    cep varchar(10) not null,
    endereco varchar(50) not null
    );
    
	create table empresa(
    id_empresa int primary key auto_increment,
    cnpj varchar(20) not null,
    cep varchar(10) not null,
    telefone varchar(15) not null,
    endereco varchar(50) not null,
    razao_social varchar(100) not null,
    nome_fantasia varchar(25) not null
    );
    
	create table user(
    id_user int primary key auto_increment,
    id_pessoa int,
    CONSTRAINT user FOREIGN KEY (id_pessoa) REFERENCES Pessoa (id_pessoa),
    data_cadastro datetime  
    );
    
    create table empresa_user(
    id_empresa_user int primary key auto_increment,
    id_empresa int,
    CONSTRAINT empresa_user FOREIGN KEY (id_empresa) REFERENCES empresa (id_empresa),
    data_cadastro datetime
    );
    
    create table produto(
    id_produto int primary key auto_increment,
    nome varchar(25) not null,
    descricao varchar(100),
    id_user int,
     CONSTRAINT produto FOREIGN KEY (id_user) REFERENCES user (id_user),
     imagem blob,
     valor_unitario float not null
    );
    
    create table categoria(
    id_categoria int primary key auto_increment,
    nome varchar(25) not null,
    descricao varchar(100),
    id_produto int,
    CONSTRAINT categoria FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
    );