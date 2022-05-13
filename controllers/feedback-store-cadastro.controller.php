<?php
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
    echo "Cadastro do usuario: $usuario, realizado com sucesso! <a class='text-primary text-decoration-none' href='login.php'>&nbspEntrar</a>";
}   