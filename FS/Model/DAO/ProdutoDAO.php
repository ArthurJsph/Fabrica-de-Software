<?php
 function insert(Produto $produto){
    $sql = "INSERT INTO categoria (nome, descricao, id_produto) VALUES (:nome, :descricao, :id_produto)";

}

?>