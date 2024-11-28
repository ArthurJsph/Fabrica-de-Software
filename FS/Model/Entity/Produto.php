<?php
use PHP\Controller\ProdutoController;
 class Produto extends ProdutoController{

    private $id_produto;
    private $nome;
    private $descricao;
    private $id_user;
    private $imagem;
    private $valor_unitario;

    public function getId_produto(){
        return $this->id_produto;
    }

    public function setId_produto($id_produto){
        $this->id_produto = $id_produto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getId_user(){
        return $this->id_user;
    }

    public function setId_user($id_user){
        $this->id_user = $id_user;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem = $imagem;
    }

    public function getValor_unitario(){
        return $this->valor_unitario;
    }

    public function setValor_unitario($valor_unitario){
        $this->valor_unitario = $valor_unitario;
    }
}

?>