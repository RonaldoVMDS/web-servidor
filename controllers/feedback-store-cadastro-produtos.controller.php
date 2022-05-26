<?php
require ('conexao.php');
$bd = Conexao::get();
$nome = $_POST['nome_produto'] ?? '';
$descricao = $_POST['desc_produto'] ?? '';
$preco = $_POST['preco_produto'] ?? '';
$tamanho_p = $_POST['tamanho_p'] ?? '';
$tamanho_m = $_POST['tamanho_m'] ?? '';
$tamanho_g = $_POST['tamanho_g'] ?? '';
$tamanho_gg = $_POST['tamanho_gg'] ?? '';
$imagem = $_POST["img_produto"] ?? '';

if ($nome == '' || $descricao == '' || $preco == '' || $tamanho_p == '' || $tamanho_m == '' || $tamanho_g == '' || $tamanho_gg == '' || $imagem == '') {
    require '../cadastro-produtos.php?acao=erro-campos-vazios';
} else {
    $query = $bd -> prepare("INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES (:nome, :preco, :descricao, :tamanho_p, :tamanho_m, :tamanho_g, :tamanho_gg, :imagem)");
    $query -> bindParam(':nome', $_POST['nome_produto']);
    $query -> bindParam(':preco', $_POST['preco_produto']);
    $query -> bindParam(':descricao', $_POST['desc_produto']);
    $query -> bindParam(':tamanho_p', $_POST['tamanho_p']);
    $query -> bindParam(':tamanho_m', $_POST['tamanho_m']);
    $query -> bindParam(':tamanho_g', $_POST['tamanho_g']);
    $query -> bindParam(':tamanho_gg', $_POST['tamanho_gg']);
    $query -> bindParam(':imagem', $_POST['img_produto']);
    $query -> execute();
    echo "Produto: $nome, cadastrado com sucesso!";
}    