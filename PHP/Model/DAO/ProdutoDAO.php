<?php
public function insert($categoria){
    $sql = "INSERT INTO categoria (nome, descricao, id_produto) VALUES (:nome, :descricao, :id_produto)";

}

?>