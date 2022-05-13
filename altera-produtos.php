<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head

?>
<title>Alteração de Produtos - RM Sports</title> <!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <!-- Tela de cadastro -->
    <?php require('controllers/altera-produtos.controller.php') ?>
    <!-- Tela de cadastro -->

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>