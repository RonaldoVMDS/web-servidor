<?php
require ('conexao.php');
$bd = Conexao::get();
$nome = $_POST['nome'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$usuaario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$confirmaSenha = $_POST['confirma-senha'] ?? '';

$query = $bd -> prepare("SELECT * FROM usuarios");
$query -> execute();
$usuarios = $query->fetchAll(PDO::FETCH_OBJ); 

foreach ($usuarios as $usuario){
    if ($usuaario == $usuario->usu_usuario){
        header('location: cadastro.php?acao=erro-usu-existe');
    }
}

if ($nome  == '' || $sobrenome == '' || $usuario == '' || $email == '' || $senha == '' || $confirmaSenha == '') {
    header('location: cadastro.php?acao=erro-campos-vazios');
} else if ($senha <> $confirmaSenha) {
    header('Location: cadastro.php?acao=erro-senha');
} else if($usuario == 'admin'){
    header('Location: cadastro.php?acao=super-user');
} else {
    //gravar no banco de dados
    $query = $bd -> prepare("INSERT INTO usuarios (usu_nome, usu_sobrenome, usu_usuario, usu_email, usu_senha) VALUES (:nome, :sobrenome, :usuario, :email, :senha)");
    $query -> bindParam(':nome', $_POST['nome']);
    $query -> bindParam(':sobrenome', $_POST['sobrenome']);
    $query -> bindParam(':usuario', $_POST['usuario']);
    $query -> bindParam(':email', $_POST['email']);
    $query -> bindParam(':senha', $_POST['senha']);
    $query -> execute();
    echo "Cadastro do usuario: $usuaario, realizado com sucesso! <a class='text-primary text-decoration-none' href='login.php'>&nbspEntrar</a>";
}   