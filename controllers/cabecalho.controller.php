<?php
    //verifica se o usuário está logado
    $Logado = $_SESSION['logado'] ?? false;
    //função para receber o nome do usuário - caso não esteja logado irá apresentar a tela "entrar" que chama o login   
    function verificaUsuario($Logado){
        if ($Logado == true){
            return $_SESSION['usuario'];
        }
        return 'Entrar';
    }//caso usuário esteja logado, mosta o texto sair, se não estiver, aparece a opção de cadastrar
    function verificaCadastro($Logado){
        if ($Logado == true){
            return 'Sair';
        }
        return 'Quero me cadastrar';
    }//caso esteja logado, o link para sair envia para a tela de destruição da sessão, caso contrário, envia para a tela de cadastro
    function verificaLink($Logado){
        if ($Logado == true){
            return 'logout.php';
        }
        return '/cadastro';
    }

require('layout/cabecalho.php');
