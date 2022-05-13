<?php
    $nome = $_POST['nome_produto'] ?? '';
    $descricao = $_POST['desc_produto'] ?? '';
    $preco = $_POST['preco_produto'] ?? '';
    $quantidade = $_POST['quant_produto'] ?? '';
    $imagem = $_POST['img_produto'] ?? '';

    if ($nome == ''){
        header('location: cadastro-produtos.php?acao=erro-nome-vazio');
    }else if ($descricao == ''){
        header('location: cadastro-produtos.php?acao=erro-descricao-vazio');
    }else if ($preco == ''){
        header('location: cadastro-produtos.php?acao=erro-preco-vazio');
    }else if ($quantidade == ''){
        header('location: cadastro-produtos.php?acao=erro-quantidade-vazio');
    }else if (empty($imagem)){
        header('location: cadastro-produtos.php?acao=erro-imagem-vazio');
    }else{
        //gravar no banco de dados
        echo "Produto: $nome, cadastrado com sucesso!";
    } 