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
    header('location: cadastro-produtos.php?acao=erro-campos-vazios');
} 
    $query = $bd -> prepare("ALTER TABLE 'produto' ");
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
           