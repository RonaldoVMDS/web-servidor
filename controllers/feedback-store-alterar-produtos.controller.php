<?php
require ('conexao.php');
$bd = Conexao::get();
$id = $_POST['id_produto'] ?? '';
$opcao = $_POST['opcoes'] ?? '';
$novo_valor_texto = $_POST['altera-texto'] ?? '';
$novo_valor_numero = $_POST['altera-numero'] ?? '';

if ($id == ''){
    header('location: altera-produtos.php?acao=erro-id-vazio');
}

$query = $bd->prepare("SELECT * FROM produto WHERE id_produto = $id");
$query->execute();
$produto = $query->fetch(PDO::FETCH_OBJ);

if ($opcao == 'escolha'){
    header('location: altera-produtos.php?acao=erro-escolha');
}

if ($opcao == 'prod_nome' || $opcao == 'prod_preco' || $opcao == 'prod_descricao' || $opcao == 'prod_imagem'){
    if ($novo_valor_texto == ''){
        header('location: altera-produtos.php?acao=erro-campos-vazios');
    } else {
        $query = $bd -> prepare("UPDATE produto SET $opcao = '$novo_valor_texto' WHERE id_produto = $id");
        $query -> execute();
        echo "Produto alterado com sucesso!";   
    }
}

if ($opcao == 'tamanho_p' || $opcao == 'tamanho_m' || $opcao == 'tamanho_g' || $opcao == 'tamanho_gg'){
    if ($novo_valor_numero == ''){
        header('location: altera-produtos.php?acao=erro-campos-vazios');
    } else {
        $query = $bd -> prepare("UPDATE produto SET $opcao = '$novo_valor_numero' WHERE id_produto = $id");
        $query -> execute();
        echo "Produto alterado com sucesso!";
    }
}         