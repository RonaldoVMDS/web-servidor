<?php
require ('conexao.php');
$bd = Conexao::get();
$nome = $_POST['nome'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$confirmaSenha = $_POST['confirma-senha'] ?? '';

if ($nome  == '' || $sobrenome == '' || $usuario == '' || $email == '' || $senha == '' || $confirmaSenha == '') {
    header('location: cadastro.php?acao=erro-campos-vazios');
} else if ($senha <> $confirmaSenha) {
    header('Location: cadastro.php?acao=erro-senha');
} else {
    //gravar no banco de dados
    $query = $bd -> prepare("INSERT INTO usuarios (usu_nome, usu_sobrenome, usu_usuario, usu_email, usu_senha) VALUES (:nome, :sobrenome, :usuario, :email, :senha)");
    $query -> bindParam(':nome', $_POST['nome']);
    $query -> bindParam(':sobrenome', $_POST['sobrenome']);
    $query -> bindParam(':usuario', $_POST['usuario']);
    $query -> bindParam(':email', $_POST['email']);
    $query -> bindParam(':senha', $_POST['senha']);
    $query -> execute();
    echo "Cadastro do usuario: $usuario, realizado com sucesso! <a class='text-primary text-decoration-none' href='login.php'>&nbspEntrar</a>";
}   