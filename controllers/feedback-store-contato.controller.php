<?php
    $nome = $_POST['contato-nome'] ?? '';
    $email = $_POST['contato-email'] ?? '';
    $descricao = $_POST['descricao'] ?? '';

    if ($nome == '' || $email == '' || $descricao == ''){
        header('location: contato.php?acao=erro-campos-vazios');
    } else{
        //gravar no banco de dados
        echo "Mensagem enviada com sucesso!";
    }        
    