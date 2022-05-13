<?php
//verifica e não permite acessar a tela do carrinho caso usuário não esteja logado, redireciona para o login
if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: login.php');
}

require('views/carrinho.view.php');