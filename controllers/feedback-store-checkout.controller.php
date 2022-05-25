<?php
require ('conexao.php');
$bd = Conexao::get();
$id = $_POST['id_produto'] ?? '';

if ($id == ''){
    header('location: excluir-produtos.php?acao=erro-id-vazio');
}else {
    $query = $bd -> prepare("DELETE FROM produto WHERE id_produto = $id");
    $query -> execute();
    echo "Produto Excluido com sucesso!";    
}

       