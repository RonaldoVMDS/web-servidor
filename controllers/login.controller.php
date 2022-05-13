<?php

require("models/login.model.php");

//checar se as credenciais do usuario estão ok
if ($usuario == 'admin' && $senha == '123456') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Administrador';

    header('Location: index.php');
}else if ($usuario == 'cliente' && $senha == '987654') {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = 'Cliente';

    header('Location: index.php');
} else if (!empty($_POST)) {
    $erro = true;
}

//checar se o usuario já está logado
if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: index.php');
}

require("views/login.view.php");