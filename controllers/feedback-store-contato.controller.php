<?php
require ('conexao.php');
    $bd = Conexao::get();
    $nome = $_POST['contato-nome'] ?? '';
    $email = $_POST['contato-email'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    if ($nome == '' || $email == '' || $mensagem == ''){
        header('location: contato.php?acao=erro-campos-vazios');
    } else{
        //gravar no banco de dados
        $query = $bd -> prepare("INSERT INTO feedback (feed_nome, feed_mensagem, feed_email, feed_opcao) VALUES (:nome, :mensagem, :email, :opcoes)");
        $query -> bindParam(':nome', $_POST['contato-nome']);
        $query -> bindParam(':mensagem', $_POST['mensagem']);
        $query -> bindParam(':email', $_POST['contato-email']);
        $query -> bindParam(':opcoes', $_POST['opcoes']);
        $query -> execute();
        echo "Mensagem enviada com sucesso!";
    }        
    