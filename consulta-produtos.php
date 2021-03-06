<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head

?>
<title>Consulta de Produtos - RM Sports</title> <!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <!-- Controlador do Administrador -->
    <?php require("controllers/administrador-prod.controller.php") ?>
    <!-- Controlador do Administrador -->

    <!-- Tela de cadastro -->
    <?php require('controllers/consulta-produtos.controller.php') ?>
    <!-- Tela de cadastro -->

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>