<?php
use PHP\Controller\EmpresaController;

public class Empresa extends EmpresaController {
    //Atributos
    private $id_empresa;
    private $cnpj;
    private $cep;
    private $telefone;
    private $endereco;
    private $razao_social;
    private $nome_fantasia;

    //Getters e Setters
    public function getId_empresa(){
        return $this->id_empresa;
    }

    public function setId_empresa($id_empresa){
        $this->id_empresa = $id_empresa;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getRazao_social(){
        return $this->razao_social;
    }

    public function setRazao_social($razao_social){
        $this->razao_social = $razao_social;
    }

    public function getNome_fantasia(){
        return $this->nome_fantasia;
    }

    public function setNome_fantasia($nome_fantasia){
        $this->nome_fantasia = $nome_fantasia;
    }

}

?>