<?php

require("models/login.model.php");
require('conexao.php');
$bd = Conexao::get();

//checar se as credenciais do usuario estão ok

$query = $bd->prepare('SELECT * FROM usuarios');
$query->execute();
$credenciais = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($credenciais as $credencial) {
    if ($usuario == '') {
        $ajuda = false;
    } else if ($usuario == $credencial->usu_usuario) {
        if ($senha == $credencial->usu_senha) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;

            header('Location: /');
        }
    }
}

//checar se o usuario já está logado
if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: /');
}
require("views/login.view.php");
